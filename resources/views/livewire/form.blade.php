<div class="form-group">
    <label>Titulo</label>
    <input type="text" class="form-control" wire:model="titulo">
    @error('titulo') <span>{{$message}}</span> @enderror
</div>
<div class="form-group">
    <label>body</label>
  <textarea class="form-control" wire:model="body"></textarea>
    @error('body') <span>{{$message}}</span> @enderror
</div>

