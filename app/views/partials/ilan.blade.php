<div class="container">
    <div class="row form-group">
        <div class="col-xs-12">
            <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                <li class="{{ Request::path() == 'Ads' ? 'active' : ''; }}"><a href="./Ads">
                    <h4 class="list-group-item-heading">Step 1</h4>
                    <p class="list-group-item-text">Business Profile</p>
                </a></li>
                <li class="{{ Request::path() == 'adsInfo' ? 'active' : 'disabled'; }}"><a href="">
                    <h4 class="list-group-item-heading">Step 2</h4>
                    <p class="list-group-item-text">Ad Information</p>
                </a></li>
                <li class="{{ Request::path() == 'preview' ? 'active' : 'disabled'; }}"><a href="#step-3">
                    <h4 class="list-group-item-heading">Step 3</h4>
                    <p class="list-group-item-text">Preview</p>
                </a></li>
                <li class="disabled"><a href="#step-3">
                    <h4 class="list-group-item-heading">Step 4</h4>
                    <p class="list-group-item-text">Approve</p>
                </a></li>
            </ul>
        </div>
    </div>
</div>