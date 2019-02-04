 <!-- main Content Area -->
            <div class="col-md-9 main-content-area">
              <!-- overview panel -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Website Overview</h3>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-3 dash-dash-icon text-center">
                      <div class="well">
                        <h4><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?= userCount()?></h4>
                        <h2>Users</h2>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="well dash-dash-icon text-center">
                        <h4><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <?= pageCount()?></h4>
                        <h2>Pages</h2>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="well dash-dash-icon text-center">
                        <h4><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> <?= postCount()?></h4>
                        <h2>Posts</h2>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="well dash-dash-icon text-center">
                        <h4><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> <?= commentCount()?></h4>
                        <h2>Comments</h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end overview -->