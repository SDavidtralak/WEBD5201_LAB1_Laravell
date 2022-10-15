<aside class="col-md-4 ml-auto blog-sidebar">


    <div class="p-3">
      <h4 class="font-italic">Archives</h4>
      <ol class="list-unstyled mb-0">
        @foreach ($archives as $storage )
            <li>
                <a href="/?month={{$storage['month']}}&year={{$storage['year']}}">
                    {{$storage['month']. ' ' . $storage['year']}}
                </a>
            </li>

        @endforeach

      </ol>
    </div>

    <div class="p-3">
        <h4 class="font-italic">Tags</h4>
        <ol class="list-unstyled mb-0">
          @foreach ($tags as $tag )
              <li>
                  <a href="/posts/tags/{{$tag}}">
                    {{$tag}}
                  </a>
              </li>

          @endforeach

        </ol>
      </div>

    <div class="p-3">
      <h4 class="font-italic">Elsewhere</h4>
      <ol class="list-unstyled">
        <li><a href="#">GitHub</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Facebook</a></li>
      </ol>
    </div>
</aside>
