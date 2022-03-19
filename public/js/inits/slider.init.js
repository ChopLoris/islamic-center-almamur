"use strict"

    $(document).ready(function() {
        new Splide( '.splide-navbar', {
            autoplay: true,
            height: "70vh",
            pagination: false,
        } ).mount();

        new Splide( '.slider-petugas', {
            autoplay: true,
            pagination: false,
            arrows: false
        } ).mount();

        new Splide( '.splide-content', {
            type   : 'loop',
            drag   : 'free',
            perPage: 4,
            autoplay: true,
            autoWidth: true,
            pagination: false,
            arrows: false
        } ).mount();


        var splide = new Splide( '#main-slider', {
            pagination: false,
            height: "540px",
            cover: true
          } );

          var thumbnails = document.getElementsByClassName( 'thumbnail' );
          var current;

          for ( var i = 0; i < thumbnails.length; i++ ) {
            initThumbnail( thumbnails[ i ], i );
          }

          function initThumbnail( thumbnail, index ) {
            thumbnail.addEventListener( 'click', function () {
              splide.go( index );
            } );
          }

          splide.on( 'mounted move', function () {
            var thumbnail = thumbnails[ splide.index ];

            if ( thumbnail ) {
              if ( current ) {
                thumbnail.classList.remove('opacity-30');
              }

              thumbnail.classList.remove( 'opacity-30' );
              current = thumbnail;
            }
          } );

          splide.mount();


        new Splide( '.slider-agenda', {
            arrows: false
        } ).mount();
        new Splide( '.slider-pengumuman', {
            arrows: false
        } ).mount();
    })
