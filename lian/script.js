window.onload = function() {
    lockDimensionsToMaxScreenSize();
  }
  
  function lockDimensionsToMaxScreenSize() {
    var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    var screenHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
  
    document.body.style.width = screenWidth + 'px';
    document.body.style.height = screenHeight + 'px';
  
    window.addEventListener('resize', function() {
      document.body.style.width = screenWidth + 'px';
      document.body.style.height = screenHeight + 'px';
    });
  }
  