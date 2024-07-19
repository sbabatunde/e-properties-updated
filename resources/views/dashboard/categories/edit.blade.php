@extends('admin.index')
@section('content')
    <!-- page content -->
    <div class="" style="background-color: #eff0ff" role="main">
        <div class="post-prop-header">
            <div class="prop-form-header">
                <div class="post-prop">
                    <h3>
                        <strong style="color: black">
                            Edit Building Material Category
                        </strong>
                    </h3>
                </div>
                @include('admin.user.details')
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="">
                        <div class="">
                            <br />
                            @include('dashboard.categories.edit.category-form')
                            @include('dashboard.categories.edit.type-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
    <script>
        function showForm(that) {
            // get Main category form
            main = document.getElementById('mainCat');
            // get sub category form
            sub = document.getElementById('subCat');
            // select main category for mainCat form in order to check state 
            main_cat = document.getElementById('main_category');
            // pick sub category input from subCat from sub category in order to check state 
            sub_cat = document.getElementById('sub_category');
            // pick category list 
            cats_list = document.getElementById('cats_list');
            // check the value of checked input 
            form = that.value;

            if (form == "sub_category") {
                main.style.display = "none";
                sub.style.display = "block";
                cats_list.style.display = "block";
                main_cat.checked = false;
                sub_cat.checked = true;
            } else {
                main.style.display = "block";
                sub.style.display = "none";
                cats_list.style.display = "none";
                main_cat.checked = true;
                sub_cat.checked = false;
            }
        }
    </script>
@endsection
