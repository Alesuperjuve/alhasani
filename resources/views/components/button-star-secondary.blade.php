<button {{ $attributes->
            merge(['type' => 'button', 
                   'class' => 'btn-btn secondary', 
                   'data-bs-dismiss' => 'modal'
                   ]) }}>
    {{ $slot }}
</button>
