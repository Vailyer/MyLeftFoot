@extends('layouts.default')

@section('content')
<div class="container-fluid">
    <div class="row">
            <div class="col-sm">
                    <div class="single category">
                        <h3 class="side-title">Search Category</h3>
                        <ul class="list-unstyled">
                            <li><a href="" title="">Mens <span class="pull-right">13</span></a></li>
                            <li><a href="" title="">Womens <span class="pull-right">13</span></a></li>
                            <li><a href="" title="">Children <span class="pull-right">13</span></a></li>
                            <li><a href="" title="">Sneakers <span class="pull-right">13</span></a></li>
                            <li><a href="" title="">Work Shoes <span class="pull-right">13</span></a></li>
                            <li><a href="" title="">Dress Shoes <span class="pull-right">13</span></a></li>
                            <li><a href="" title="">Adidas <span class="pull-right">13</span></a></li>
                            <li><a href="" title="">Nike <span class="pull-right">13</span></a></li>
                            <li><a href="" title="">Timberland <span class="pull-right">13</span></a></li>
                            <li><a href="" title="">Vans <span class="pull-right">13</span></a></li>
                        </ul>
                    </div>
            </div>
            <div class="col-md">
                <div class="form-group has-search">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <hr>
            </div>
            <div class="col-md">
              One of three columns
            </div>
          </div>
    </div>
</div>
@stop