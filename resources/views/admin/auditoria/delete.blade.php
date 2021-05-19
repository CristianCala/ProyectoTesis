<form action="{{Route('auditoria.destroy',$key->id)}}" method="post" onclick="return confirm('desea eliminar esta auditoria?');" style="display: inline-block;">
{{ csrf_field() }}
                {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-danger">Destroy</button>
        </form>