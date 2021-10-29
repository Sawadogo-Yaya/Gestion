<!DOCTYPE html>

<html lang="en">
  <head>
       @include('layouts.admin.head')
  </head> 
     <body class="hold-transition sidebar-mini">
      <div class="wrapper">
        <div>
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                      @include('layouts.admin.sidbar')
              </aside>
                <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                     @include('layouts.admin.navbar')
                </nav>
                      <div class="content-wrapper">
                            @include('flash::message')
                                   @yield('contenu')

                      </div>
  
                       <aside class="control-sidebar control-sidebar-dark">
                          <div class="p-3">
                            <h5>Title</h5>
                              <p>Sidebar content</p>
                          </div>
                        </aside>
                    </div>           
             <footer class="main-footer">
                     @include('layouts.admin.footer')
              </footer>
             
        </div> 

  @include('layouts.admin.footer-script')

</body>
</html>
