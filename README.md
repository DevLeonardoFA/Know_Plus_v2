# Know_Plus_v2
2º versão do Know_Plus

Para ver esse projeto funcionando plenamente, tem algumas coisas que eu tenho que explicar:

1º o Php está configurado para o localhost (só jogar na pasta htdocs do XAMP, LAMP e MAMP); 
2º Use o codigo abaixo para criar o DB (se quiser mexer no codigo fique a vontade, tudo está bem separado);
  
  Para criar e selecionar o DB:
  - CREATE DATABASE know_plus;
  - SELECT DATABASE know_plus;
  
  Para criar as tabelas:
  - CREATE TABLE usuario (
      ID Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
      login Varchar(30),
      senha Varchar(40),
      Primary Key (ID)
    );
    
Na versão atual, ele já está cadastrando e fazendo login;

proximos objetivos: Criar área de Perfil, Painel ADM e niveis de acesso.
