<h1>Add Article</h1>
<?php
    echo $this->Form->create($article);
    echo $this->Form->control('title');
    echo $this->Form->control('body', ['rows' => '3']);
    echo $this->Form->control('tag_string', ['type' => 'text']);
    echo $this->Form->control('published', ['type' => 'checkbox']);
    echo $this->Form->button(__('Save Article'));
    echo $this->Form->end();
?>