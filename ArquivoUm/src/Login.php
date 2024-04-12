<?php
namespace App\Src;
class Login {
    public function executar($lo, $se) {
      $login = $lo;
      $senha = $se;
  
      $perfil = 'professor'; 
      $usuario = UsuarioFactory::criar($perfil);
  
      if ($usuario->autenticar($login, $senha)) {
        $autorizacoes = $usuario->autorizar();
        echo "Bem-vindo, $login! " . implode(', ', $autorizacoes);
      } else {
        echo 'ERRO! Login incorreto.';
      }
    }
  }