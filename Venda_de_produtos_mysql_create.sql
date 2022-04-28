CREATE TABLE `Produtos` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`nome` varchar(255) NOT NULL,
	`estoque` varchar(255) NOT NULL,
	`marca` varchar(255) NOT NULL,
	`categoria_id` INT NOT NULL,
	`forn_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Clientes` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`nome` varchar(255) NOT NULL,
	`cpf` varchar(255) NOT NULL,
	`uf` varchar(255) NOT NULL,
	`cidade` varchar(255) NOT NULL,
	`bairro` varchar(255) NOT NULL,
	`cep` varchar(255) NOT NULL,
	`rua` varchar(255) NOT NULL,
	`endereco` varchar(255) NOT NULL,
	`telefone` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Pedidos` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`valor` FLOAT NOT NULL,
	`data` DATE NOT NULL,
	`forma_pagamento` varchar(255) NOT NULL,
	`cliente_id` INT NOT NULL,
	`vendedor_id` INT NOT NULL,
	`status_ped_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Categorias` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`nome` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Fornecedores` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`nome` varchar(255) NOT NULL,
	`cnpj` varchar(255) NOT NULL,
	`telefone` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Vendedor` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`nome` varchar(255) NOT NULL,
	`telefone` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Produtos_pedido` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`pedido_id` INT NOT NULL,
	`produtos_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Status_ped` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`descricao` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `Produtos` ADD CONSTRAINT `Produtos_fk0` FOREIGN KEY (`categoria_id`) REFERENCES `Categorias`(`id`);

ALTER TABLE `Produtos` ADD CONSTRAINT `Produtos_fk1` FOREIGN KEY (`forn_id`) REFERENCES `Fornecedores`(`id`);

ALTER TABLE `Pedidos` ADD CONSTRAINT `Pedidos_fk0` FOREIGN KEY (`cliente_id`) REFERENCES `Clientes`(`id`);

ALTER TABLE `Pedidos` ADD CONSTRAINT `Pedidos_fk1` FOREIGN KEY (`vendedor_id`) REFERENCES `Vendedor`(`id`);

ALTER TABLE `Pedidos` ADD CONSTRAINT `Pedidos_fk2` FOREIGN KEY (`status_ped_id`) REFERENCES `Status_ped`(`id`);

ALTER TABLE `Produtos_pedido` ADD CONSTRAINT `Produtos_pedido_fk0` FOREIGN KEY (`pedido_id`) REFERENCES `Pedidos`(`id`);

ALTER TABLE `Produtos_pedido` ADD CONSTRAINT `Produtos_pedido_fk1` FOREIGN KEY (`produtos_id`) REFERENCES `Produtos`(`id`);









