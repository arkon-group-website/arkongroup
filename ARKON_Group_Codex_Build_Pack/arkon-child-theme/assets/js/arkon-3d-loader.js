(function () {
  const mounts = document.querySelectorAll('[data-arkon-3d]');
  if (!mounts.length) return;

  const isSmall = window.matchMedia('(max-width: 767px)').matches;
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const saveData = navigator.connection && navigator.connection.saveData;

  mounts.forEach((mount) => {
    const fallback = mount.getAttribute('data-fallback');
    const splineUrl = mount.getAttribute('data-spline');

    if (isSmall || prefersReducedMotion || saveData || !splineUrl) {
      if (fallback) {
        mount.innerHTML = '<img class="arkon-3d-fallback" src="' + fallback + '" alt="ARKON Group 3D command center">';
      }
      return;
    }

    const iframe = document.createElement('iframe');
    iframe.src = splineUrl;
    iframe.title = 'ARKON Group 3D command center';
    iframe.loading = 'lazy';
    iframe.allow = 'autoplay; fullscreen';
    iframe.style.width = '100%';
    iframe.style.height = '100%';
    iframe.style.border = '0';
    mount.appendChild(iframe);
  });
})();
