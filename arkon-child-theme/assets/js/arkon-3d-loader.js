(function () {
  const mounts = document.querySelectorAll('[data-arkon-3d]');
  if (!mounts.length) return;

  const isSmall = window.matchMedia('(max-width: 767px)').matches;
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const saveData = navigator.connection && navigator.connection.saveData;
  const shouldUseFallback = isSmall || prefersReducedMotion || saveData;

  const getSafeUrl = (value) => {
    if (!value) return '';

    try {
      const url = new URL(value, window.location.href);
      return ['http:', 'https:'].includes(url.protocol) ? url.href : '';
    } catch (error) {
      return '';
    }
  };

  const renderFallback = (mount, fallback, label) => {
    if (!fallback) {
      mount.setAttribute('data-arkon-3d-state', 'static');
      return;
    }

    mount.textContent = '';

    const image = document.createElement('img');
    image.className = 'arkon-3d-fallback';
    image.src = fallback;
    image.alt = label;
    image.loading = 'lazy';
    image.decoding = 'async';
    mount.appendChild(image);
    mount.setAttribute('data-arkon-3d-state', 'fallback');
  };

  mounts.forEach((mount) => {
    const fallback = getSafeUrl(mount.getAttribute('data-fallback'));
    const splineUrl = getSafeUrl(mount.getAttribute('data-spline'));
    const label = mount.getAttribute('data-arkon-3d-label') || 'ARKON Group 3D command center';

    if (shouldUseFallback || !splineUrl) {
      renderFallback(mount, fallback, label);
      return;
    }

    const iframe = document.createElement('iframe');
    iframe.className = 'arkon-3d-frame';
    iframe.src = splineUrl;
    iframe.title = label;
    iframe.loading = 'lazy';
    iframe.allow = 'autoplay; fullscreen';
    iframe.allowFullscreen = true;
    iframe.referrerPolicy = 'strict-origin-when-cross-origin';
    mount.appendChild(iframe);
    mount.setAttribute('data-arkon-3d-state', 'loaded');
  });
})();
