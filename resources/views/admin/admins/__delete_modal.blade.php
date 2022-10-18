<!-- Modal -->
<div class="modal fade" 
    id="modal-delete-{{ $model->id }}" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="modalDeleteLabel{{ $model->id }}" 
    aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="modalDeleteLabel{{ $model->id }}">삭제 확인</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            {{ $model->name }} 를 정말로 삭제합니까?
        </div>
        <div class="modal-footer">
            <form method="POST" 
                action="{{ route('admin.admins.destroy' , ['admin' => $model]) }}">
                @method('DELETE')
                @csrf
            <button type="button" 
                    class="btn btn-secondary btn-sm" 
                    data-dismiss="modal">Close</button>
            <input id="submit" type="submit" class="btn btn-danger btn-sm" value="삭제">
            </form>
        </div>
    </div>
    </div>
</div>