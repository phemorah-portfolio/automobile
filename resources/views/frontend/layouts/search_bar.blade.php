<style>
    .tabs {
        max-width: 640px;
        margin: 0 auto;
        padding: 0 20px;
    }         
 </style>
    <!-- Search Bar -->   
    <section> 
        <div class="blue-container">   
            <div class="search-bar"> 
                <ul id="tab-button">
                    <li><a href="#general">General Search</a></li>
                    <li><a href="#model">Search By Model</a></li>
                </ul>
            </div>  
            <div class="search-contents">
                <div class="col-12 col-md-12">
                    <div id="general" class="tab-contents">
                        <form action="">                            
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                <select name="car_type" class="custom-select form-control" id="i1" required>
                                    <option value="" selected>Select Car Type</option>
                                </select>
                                </div>
                        
                                <div class="col-md-4 mb-4">
                                <select name="brand" class="custom-select form-control" id="i2" required>
                                    <option value="" selected>Choose Brand</option>
                                </select>
                                </div>                  
                                <div class="col-md-4 mb-4">
                                <select name="price" class="custom-select form-control" id="i2" required>
                                    <option selected>Select Price</option>
                                </select>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                <select name="mile" class="custom-select form-control" id="i1" required>
                                    <option selected>Select Mile</option>
                                </select>
                                </div>
                        
                                <div class="col-md-4 mb-4">
                                <select name="model" class="custom-select form-control" id="i2" required>
                                    <option selected>Select Model</option>
                                </select>
                                </div>
                        
                                <div class="col-md-4 mb-4">                            
                                <div class="form-group">
                                    <button class="btn btn-sm btn-danger">Search</button>
                                </div>
                                </div>
                            </div>                                
                        </form>
                    </div>
                    <div id="model" class="tab-contents"> 
                        <form action="">     
                            <div class="row">                        
                                <div class="col-md-3 mb-3">
                                    <select name="model" class="custom-select form-control" id="i2" required>
                                        <option value="" selected>Select Model</option>
                                    </select>
                                </div>

                                <div class="col-md-3 mb-4">
                                    <select name="mile" class="custom-select form-control" id="i1" required>
                                        <option value="" selected>Car Type</option>
                                    </select>
                                </div>
                        
                                <div class="col-md-3 mb-4">                            
                                    <div class="form-group">
                                        <button class="btn btn-sm btn-danger">Search</button>
                                    </div>
                                </div>
                            </div>                                
                        </form>
                    </div>                           
                </div>
            </div>        
        </div>
    </section>
    <!-- End Search Bar -->
    
    <script>
        $(function () {
          $('#myTab li:last-child a').tab('show')
        })

        $(function() {
            var $tabButtonItem = $('#tab-button li'),
                $tabSelect = $('#tab-select'),
                $tabContents = $('.tab-contents'),
                activeClass = 'active';

            $tabButtonItem.first().addClass(activeClass);
            $tabContents.not(':first').hide();

            $tabButtonItem.find('a').on('click', function(e) {
                var target = $(this).attr('href');

                $tabButtonItem.removeClass(activeClass);
                $(this).parent().addClass(activeClass);
                $tabSelect.val(target);
                $tabContents.hide();
                $(target).show();
                e.preventDefault();
            });

            $tabSelect.on('change', function() {
                var target = $(this).val(),
                    targetSelectNum = $(this).prop('selectedIndex');

                $tabButtonItem.removeClass(activeClass);
                $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
                $tabContents.hide();
                $(target).show();
            });
        });
    </script>