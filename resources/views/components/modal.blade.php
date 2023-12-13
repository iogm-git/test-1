<div class="modal">
    <div class="modal-box">
        <div class="modal-header">
            <p>Alert</p>
            <div class="badge btn-close" onclick="document.getElementsByClassName('modal')[0].remove()">&times;</div>
        </div>
        <div class="modal-content">
            <p>{{ session()->get('success') }}</p>
            <br>
            <div class="badge badge-success">Success</div>
        </div>
        <div class="modal-footer" onclick="document.getElementsByClassName('modal')[0].remove()">
            <div class="button bg-text-alt">
                Ok
            </div>
        </div>
    </div>
</div>
