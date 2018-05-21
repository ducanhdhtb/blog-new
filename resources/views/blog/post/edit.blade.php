@extends('../layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('save') }}" method="POST" role="form">
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        <input type="hidden" name="id" value="{{(!empty($post['id']) ? $post['id'] : '')}}" />
        <div class="form-content">
            <div>
                <label for="">Title</label>
                <input name="title" type="text" class="form-control" sid="" value="{{(!empty($post['title']) ? $post['title'] : '')}}">
            </div>
            <div>
                <label>Category</label>
                <select name="category_id" class="form-control" style="width: 40%">
                    <?php $selectedCategory = !empty($post['category_id']) ? $post['category_id'] : '' ;?>
                    <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category['id'] ?>" <?php echo ( $category['id'] == $selectedCategory) ? 'selected' : '';?>>
                        <?php echo $category['name'] ?>
                    </option>
                    <?php endforeach;?>
                </select>
            </div>
            <div>
                <label for="">Summary</label>
                <textarea style="width: 40%;background: white" name="summary" rows="7" class="form-control" >
                    {{(!empty($post['summary']) ? $post['summary'] : '')}}
                </textarea>
            </div>

            <div>
                <label for="">Content</label>
                <textarea name="content" rows="7" class="form-control">
                    {{(!empty($post['content']) ? $post['content'] : '')}}
                </textarea>
            </div>
        </div>
        <div class="form-action">
            <button type="submit" class="btn btn-danger">Submit</button>
        </div>
    </form>
</div>

@endsection