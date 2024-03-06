<x-app-layout>
    <div class="container-sm mt-4">
      @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif
      <div class=" card p-3 " style="width: 50rem;">
        <h1>Task {{$task->title}}</h1>
        <form action="{{route('task.update', $task->id)}}" method="POST">
          @csrf
          @method('PUT')
              <div class="input-group flex-nowrap mb-2">
                <span class="input-group-text" id="addon-wrapping">Titulo</span>
                <input type="text" name="title" class="form-control"
                   aria-describedby="addon-wrapping" value="{{$task->title}}" >
              </div>
              <div class="input-group flex-nowrap mb-2">
                <span class="input-group-text" id="addon-wrapping">Descrição</span>
                <input type="text" name="description" class="form-control"
                   aria-describedby="addon-wrapping" value="{{$task->description}}" >
              </div>
              <div class="input-group flex-nowrap mb-2">
                <span class="input-group-text" id="addon-wrapping">Categoria</span>
                <input type="text" name="name_category" class="form-control"
                   aria-describedby="addon-wrapping" value="{{$task->name_category }}" >
              </div>
              <select class="form-select mb-2" name="completed" aria-label="Default select example">
                <option selected>Status</option>
                <option value="0" {{ $task->completed == 0 ? 'selected' : '' }}>Pendente</option>
                <option value="1" {{ $task->completed == 1 ? 'selected' : '' }}>Completo</option>
              </select>
              <div class="d-flex align-items-end">
                <button type="submit" class="btn btn-success mr-2">Save</button>
                <a href="{{route('dashboard')}}" type="button" class="btn btn-secondary mt-2">Voltar</a>
              </div>
        </form>
      </div>
    </div>
  </x-app-layout>
