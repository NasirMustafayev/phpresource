            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <?php if ($showuser['user_authorization']!=5) {}
                  else{?>
                    <li><a><i class="fa fa-cogs"></i> Tənzimləmələr <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="parameters?p=conf">Ümumi parametrlər</a></li>
                        <li><a href="parameters?p=contact-info">Əlaqə məlumatları</a></li>
                        <li><a href="parameters?p=api">Api parametrləri</a></li>
                        <li><a href="parameters?p=mail">Mail parametrləri</a></li>
                      </ul>
                    </li>
                  <?php } ?>
                  <?php if ($showuser['user_authorization']!=5) {}
                  else{?>
                    <li><a href="users"><i class="fa fa-user"></i> İstifadəçilər</a></li>
                  <?php } ?>
                  <?php if ($showuser['user_authorization']<0) {}
                  else{?>
                    <li><a href="comments"><i class="fa fa-comments"></i> Rəylər</a></li>
                  <?php } ?>
                  <?php if ($showuser['user_authorization']<2) {}
                  else{?>
                    <li><a href="ads"><i class="fa fa-globe"></i> Reklamlar</a></li>
                  <?php } ?>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->