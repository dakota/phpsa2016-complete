<div class="login form large-12 columns content">
    <?php
    echo $this->Form->create();
    echo $this->Form->input('email');
    echo $this->Form->input('password');
    echo $this->Form->button('Login');
    echo $this->Form->end();
    ?>
</div>