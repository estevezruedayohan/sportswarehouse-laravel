<ul class="footer-links__list">
  @foreach (config('common.footerNavLinks') as $linkHref => $linkText)
    <li class="footer-links__item"><a href="{{ url($linkHref) }}">{{$linkText}}</a></li>
  @endforeach
</ul>
