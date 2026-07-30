<?php

class Usuario
{
    public int $id;
    public string $nombreCompleto;
    public string $email;
    private string $password;

    public function __construct(int $id, string $nombreCompleto, string $email, string $password)
    {
        $this->id = $id;
        $this->nombreCompleto = $nombreCompleto;
        $this->email = $email;
        $this->password = $password;
    }
}
