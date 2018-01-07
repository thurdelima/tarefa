create table usuario(
	id_usuario int not null auto_increment primary key,
    nome varchar(100) not null,
    email varchar(100) not null,
    senha varchar(100) not null,
    situacao enum ('A','I')

	

);

insert into usuario (email,senha,situacao) values('email@email.com','123123','A');




create table cliente(

	id_cliente int not null auto_increment primary key,
    nome varchar(100) not null,
    sexo enum ('M', 'F'),
    data_nasc date not null,
    situacao enum ('A','I'),
    email varchar(100) not null,
    senha varchar(100) not null,
    tipo_pessoa enum ('FÍSICA','JURIDICA')

);


insert into cliente (nome ,sexo ,data_nasc ,situacao ,email ,senha ,tipo_pessoa) 
values("Marcos","M",12-12-1993,"A","marcos@email.com","123456","FÍSICA");



create table endereco(
	id_end int not null auto_increment primary key,
    identificacao varchar(50) not null,
    logradouro varchar (100) not null,
    numero varchar(25) not null,
    complemento varchar(50) not null,
    bairro varchar(50) not null,
    cidade varchar(100) not null,
    estado char(2) not null,
    cep varchar(25) not null,
    situacao enum ('A','I'),
    fk_cliente int not null,
    
    constraint fk_cliente_para_endereco foreign key (fk_cliente) references cliente (id_cliente)
    
    

);





create table categoria(
	id_categoria int not null auto_increment primary key,
    descricao varchar(100) not null,
    img varchar(45) not null,
    situacao enum ('A','I')
);


create table produto(
	id_produto int not null auto_increment primary key,
    nome varchar(100) not null,
    marca varchar(100) not null,
    modelo varchar(100) not null,
    descricao varchar(100) not null,
    codigo_ref varchar(25) not null,
    destaque enum ('S','N'),
    visualizacao int not null,
    fk_categoria int not null,
    
    constraint fk_categoria_para_produto foreign key (fk_categoria) references categoria (id_categoria)
    
    
);

create table pedido(
	id_pedido int not null auto_increment primary key,
    codigo int not null,
    data_orcamento date not null,
    data_cancelamento date null,
    pedido_estado enum ('PE','CO','AP','RE'),
    situacao enum ('A','I'),
    fk_cliente int not null,
    fk_produto int not null,
    
    constraint fk_cliente_para_orcamento foreign key (fk_cliente) references cliente (id_cliente)
    
    


);


create table pedido_itens(

	id_pedido_item int not null auto_increment primary key,
    fk_produto int not null,
    fk_pedido int not null,
    quantidade int not null,
    preco_unitario decimal (10,2) null,
    situacao enum ('A','I'),
    
    constraint fk_produto_para_pedidoitens foreign key (fk_produto) references produto (id_produto),
    constraint fk_pedido_para_pedidoitens foreign key (fk_pedido) references pedido (id_pedido)
    
    

);

create table banners(

	id_banner int not null auto_increment primary key,
    titulo varchar(50) not null,
    imagem varchar(45) not null,
    situacao enum ('A','I')
);

create table media(
	id_media int not null auto_increment primary key,
    tipo_media enum ('img','video'),
    imagem varchar(45) not null,
    video_url varchar(255) null,
    situacao enum ('A','I'),
    fk_produto int not null,
    
    constraint fk_produto_para_media foreign key (fk_produto) references produto (id_produto)
    
    

);


create table newsletter(

	id_news int not null auto_increment primary key,
    email varchar(50) not null,
    data_cadastro date not null,
    situacao enum ('A','I')

);

create table faq(
	id_faq int not null auto_increment primary key,
    pergunta varchar(100) not null,
    resposta varchar(100) not null,
    situacao enum ('A','I')
)
