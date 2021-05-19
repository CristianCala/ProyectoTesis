<form action="{{Route('equipment.destroy',$key->id)}}" method="post" onclick="return confirm('desea eliminar este equipo?');" style="display: inline-block;">
{{ csrf_field() }}
                {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-danger">Destroy</button>
        </form>