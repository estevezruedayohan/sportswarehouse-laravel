<ul class="social-links-list">
  @foreach (config('common.social_links') as $social)
    <li class="social-item">
      <a href="{{ $social['url'] }}" aria-label="{{ $social['label'] }}">
        <div class="social-icon-container">
          <i class="fa-brands {{ $social['icon'] }}" aria-hidden="true"></i>
        </div>
        <span class="social-name">{{ $social['name'] }}</span>
      </a>
    </li>
  @endforeach
</ul>
