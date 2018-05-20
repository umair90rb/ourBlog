<aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">About</h4>
            <p class="mb-0">Our Blog <em>with very basic functions</em> is blog to register for anyone and publish a post from any where with legal content.</p>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              @foreach( $archives as $stats )
                <li>
                  <a href={{url("?month=".$stats['month']."&year=".$stats['year'])}} >
                     {{$stats['month'] . " " . $stats['year']}} 
                  </a>
                </li>
              @endforeach
            </ol>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              
              @foreach( $tags as $tag )
                <li>
                  <a href='{{url("posts/tag")."/$tag"}}'>
                     {{$tag}} 
                  </a>
                </li>
              @endforeach
            </ol>
          </div>


          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="https://github.com/umair90rb" target="blank">GitHub</a></li>
              <li><a href="https://twitter.com/umair90rb" target="blank">Twitter</a></li>
              <li><a href="https://facebook.com/umair90rb" target="blank">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->