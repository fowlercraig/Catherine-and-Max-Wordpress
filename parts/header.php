<div id="header-wrapper" class="menu-swap">
   <?php 
      // Available Classes for #header:
      // .fixed: adds a fixed header
      // .forehead: adds some space above the nav.
      // .fivehead: adds a bunch of space above the nav.
      // .chin: adds some space below the nav.
   ?>

   <header id="header" class="menu-swap pinned <?php if ( $page = 'index'): echo 'home'; endif; ?>">
      <div class="fs-row">
         <div id="header--nav_visible" class="fs-cell fs-all-full fs-contained">
            <nav id="header--nav_left" class="fs-cell fs-lg-2 fs-md-1 fs-sm-1">
               <a href="#" class="btn btn-nav btn-hamburg btn-menu swap <?php if ( $page = 'index'): echo 'white'; endif; ?>" data-swap-linked=".btn-menu" data-swap-target=".menu-swap">&nbsp;</a>
            </nav>
            <nav id="header--nav_center" class="fs-cell fs-lg-8 fs-md-4 fs-sm-hide text-center">
               <a href="#" class="btn btn-nav"><?php the_field('top_date'); ?></a>
            </nav>
            <nav id="header--nav_right" class="fs-cell fs-lg-2 fs-md-hide fs-sm-2 text-right">
               <a href="#" class="btn btn-nav white btn-last"><?php the_field('hashtag'); ?></a>
            </nav>
         </div>
         <div id="header--nav_hidden" class="fs-cell fs-all-full fs-contained">
            <nav id="header--nav_left" class="fs-cell fs-lg-2 fs-md-2 fs-sm-1">
               <a href="#" class="btn btn-nav ss-gizmo btn-menu ss-delete swap white" data-swap-linked=".btn-menu" data-swap-target=".menu-swap">Close</a>
            </nav>
            <nav id="header--nav_center" class="fs-cell fs-lg-8 fs-md-hide fs-sm-hide text-center">
               <?php if ( $page != 'index'): echo '<a href="/" class="btn btn-nav">Home</a>' ; endif; ?>
               <a href="#" class="btn btn-nav">Home</a>
               <a href="#basics" class="btn btn-nav">The Basics</a>
               <a href="#registry" class="btn btn-nav">Registered Here</a>
            </nav>
            <nav id="header--nav_right" class="fs-cell fs-lg-2 fs-md-4 fs-sm-2 text-right">
               <a href="#basics" class="btn btn-nav">The Basics</a>
               <a href="#registry" class="btn btn-nav btn-last">Registry</a>
            </nav>
         </div>
      </div>
   </header>
</div>