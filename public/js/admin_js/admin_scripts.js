
$(document).ready(function(){

    // Confirm Delete
    $(".confirmDelete").click(function(){
        var name = $(this).attr('delName');
        var feedback = $(this).attr('feedback');
        var id = $(this).attr('delID');
        var delete_route = $(this).attr('delete_route');
        swal.fire({
            title: "Delete "+name+"?",
            text: "You won't be able to revert this action!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "Yes, delete it!"
          }).then((result) => {
              if (result.value) {
                if(feedback > 0){
                  window.location.href=delete_route+"/"+id+"/"+feedback;
                }
                else{
                    window.location.href=delete_route+"/"+id;
                }
              }
          });
    });

      // Load and append all user features
    $('#dropdown_role_id').change(function(){
          var roleid = $(this).val();
          // alert(roleid)
          $.ajax({
              type:'post',
              url:'/fetch-role-details',
              data:{roleid:roleid},
              success:function(resp){
                  $('#append-feature-access-list').html(resp);
              },
              error:function(){

              }
          });
      });

    // Load and append all user features
    $('#dropdown_user_id').change(function(){
      var userid = $(this).val();
      $.ajax({
        type:'post',
        url:'/fetch-user-details',
        data:{userid:userid},
        success:function(resp){
          $('#append-feature-access-list').html(resp);
        },
        error:function(){

        }
      });
    });

    // Section Categories
    $('#section_id').change(function(){
        var section_id = $(this).val();
        $.ajax({
            type:'post',
            url:'/admin/fetch-section-categories',
            data:{section_id:section_id},
            success:function(resp){
                $('#append-categories').html(resp);
            },error:function(){
                // alert('failed');
            }
        });
    });

    // Category Status Update with AJAX
    $('.updateCategoryStatus').click(function(){
        var status = $(this).text();
        var cat_id = $(this).attr('cat_id');
        $.ajax({
            type:'post',
            url:'/admin/update-category-status',
            data:{status:status,cat_id:cat_id},
            success:function(resp){
                if(resp['status'] == 0){
                    $("#category-"+cat_id).html('<a class="updateCategoryStatus" id="category-"'+cat_id+' cat_id='+cat_id+' href="javascript:void(0)">Inactive</a>');
                }
                else{
                    $("#category-"+cat_id).html('<a class="updateCategoryStatus" id="category-"'+cat_id+' cat_id='+cat_id+' href="javascript:void(0)">Active</a>');
                }
            },error:function(){
                alert("Error")
            }
        });
    });

    // Section Status Update with AJAX
    // $('.updateSectionStatus').click(function(){
    //     var status = $(this).text();
    //     var section_id = $(this).attr('section_id');
    //     $.ajax({
    //         type:'post',
    //         url:'/admin/update-section-status',
    //         data:{status:status,section_id:section_id},
    //         success:function(resp){
    //             if(resp['status'] == 0){
    //                 $("#section-"+section_id).html('<a class="updateSectionStatus" id="section-"'+section_id+' section_id='+section_id+' href="javascript:void(0)">Inactive</a>');
    //             }
    //             else{
    //                 $("#section-"+section_id).html('<a class="updateSectionStatus" id="section-"'+section_id+' section_id='+section_id+' href="javascript:void(0)">Active</a>');
    //             }
    //         },error:function(){
    //             alert("Error")
    //         }
    //     });
    // });

    $("#current_pswd_check").hide();
    // Check Admin Password is correct or not
    $("#current_pswd").keyup(function(){
        var current_pswd = $(this).val();
        $.ajax({
            type:'post',
            url:'/check-current-pswd',
            data:{current_pswd:current_pswd},
            success:function(resp){
                if(resp == true){
                    $("#current_pswd_check").text('Password is correct!').css('color','green').show();
                }else{
                    $("#current_pswd_check").text('Password is incorrect').css('color','red').show();
                }
            },error:function(){
                console.log("Response error!")
            }
        });
    });
});
