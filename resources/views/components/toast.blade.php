@if (session('message'))

    <div id="liveToast" style="display: block" class="toast align-items-center text-bg-primary border-0 position-fixed top-0 end-0 m-3" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
          <div class="toast-body">
            {{ session('message') }}
          </div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" aria-label="Close" onclick="document.getElementById('liveToast').style.removeProperty('display')"></button>
        </div>
    </div>

    <script>
        setTimeout(() => {
            document.getElementById('liveToast').style.removeProperty('display');
        }, 5000);
    </script>

@endif
