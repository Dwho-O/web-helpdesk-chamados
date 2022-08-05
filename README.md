# web-helpdesk-chamados

<h1>Tabelas normalizadas:</h1>
    - usuario: idUsuario, nome e foto;<br>
    - usuario_login: idUsuarioLogin, email e senha;<br>
    - usuario_cargo: idUsuarioCargo e cargo;<br>
    - usuario_area: idUsuarioArea e area;<br>
    - usuario_status: idUsuarioStatus e status;<br>
    - chamado: idChamado, titulo, data, mensagem, evidencia<br>
    - chamado_comentario: idChamadoComentario, comentario<br>
    - chamado_status: idChamadoStatus, status_chamado;<br>
    <br>

Alerta: ler chamados novos<br>
Permissões:
// 1 - administrador
// 2 - suporte
// 3 - usuário
<br>
Modelo de Entidade e Relacionamento - MER
<br>
![Modelo de Entidade e Relacionamento - MER](https://github.com/Dwho-O/web-helpdesk-chamados/blob/main/MER.png)