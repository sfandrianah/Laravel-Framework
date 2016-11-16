<div class="widget">
    <div class="widget-heading">System Date</div>
    <div class="widget-body">
        <div class="form-group is-empty" style="margin-top: -25px;">
            <label class="control-label" for="focusedinput">Application Date</label>
            <input type="text" value="{!!date('Y-m-d')!!}" id="application-date" class="form-control">
            <span class="material-input"></span>
        </div>
        <div class="form-group is-empty" style="margin-top: -20px;">
            <label class="control-label" for="focusedinput">Report Date</label>
            <input type="text"  value="{!!date('Y-m-d')!!}" id="report-date" class="form-control">
            <span class="material-input"></span>
        </div>
        <div class="col-md-12">
            <button class="btn btn-primary btn-raised btn-lg">Save!</button>
        </div>
        
    </div>
</div>

<!--<div class="widget">
    <div class="widget-heading">Contacts</div>
    <div class="widget-body">
        <ul class="media-list contacts">
            <li class="media notification-message">
                <div class="media-left">
                    {!! HTML::image('demo/avatar/avatar_01.png', '', ['class' => 'img-circle avatar']) !!}
                </div>
                <div class="media-body">
                    <span class="text-gray">Jon Owens</span>
                    <span class="contact-status text-success">Online</span>
                </div>
            </li>
            <li class="media notification-message">
                <div class="media-left">
                    {!! HTML::image('demo/avatar/avatar_02.png', '', ['class' => 'img-circle avatar']) !!}
                </div>
                <div class="media-body">
                    <span class="text-gray">Nina Huges</span>
                    <span class="contact-status text-muted">Offline</span>
                </div>
            </li>
            <li class="media notification-message">
                <div class="media-left">
                    {!! HTML::image('demo/avatar/avatar_03.png', '', ['class' => 'img-circle avatar']) !!}
                </div>
                <div class="media-body">
                    <span class="text-gray">Austin Lee</span>
                    <span class="contact-status text-danger">Busy</span>
                </div>
            </li>
            <li class="media notification-message">
                <div class="media-left">
                    {!! HTML::image('demo/avatar/avatar_04.png', '', ['class' => 'img-circle avatar']) !!}
                </div>
                <div class="media-body">
                    <span class="text-gray">Grady Hines</span>
                    <span class="contact-status text-warning">Away</span>
                </div>
            </li>
            <li class="media notification-message">
                <div class="media-left">
                    {!! HTML::image('demo/avatar/avatar_06.png', '', ['class' => 'img-circle avatar']) !!}
                </div>
                <div class="media-body">
                    <span class="text-gray">Adrian Barton</span>
                    <span class="contact-status text-success">Online</span>
                </div>
            </li>
        </ul>
    </div>
</div>
-->

