<div class="container">
    <div class="row">
        <div class="col-md-3 col-xs-1" id="sidebar">
            <div class="list-group bg-dark">
                <a href="#menu1" class="list-group-item">
                    <i class="fa fa-dashboard"></i>
                    <span class="hidden-sm-down">Item 1</span>
                </a>
                <a href="#menu2" class="list-group-item" data-toggle="collapse" data-parent="#sidebar">
                    <i class="fa fa-user"></i>
                    <span class="hidden-sm-down">Item 2 <i class="fa fa-caret-down"></i></span>
                </a>
                <div class="collapse" id="menu2">
                    <a href="#menu2sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">Sub 1 <i class="fa fa-caret-down"></i></a>
                    <div class="collapse" id="menu2sub1">
                        <a href="#" class="list-group-item" data-parent="#menu2sub1">Sub 1 a</a>
                        <a href="#" class="list-group-item" data-parent="#menu2sub1">Sub 1 b</a>
                        <a href="#" class="list-group-item" data-parent="#menu2sub1">Sub 1 c</a>
                    </div>
                    <a href="#" class="list-group-item" data-parent="#menu2">Sub 2</a>
                    <a href="#" class="list-group-item" data-parent="#menu2">Sub 3</a>
                </div>
                <a href="#menu3" class="list-group-item">
                    <i class="fa fa-list"></i>
                    <span class="hidden-sm-down">Item 3</span>
                </a>
                <a href="#menu4" class="list-group-item">
                    <i class="fa fa-list-alt"></i>
                    <span class="hidden-sm-down">Item 4</span>
                </a>
            </div>
        </div>
    </div>
</div>