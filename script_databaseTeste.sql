-- Insert de USUARIOS
insert into usuario(nome, prontuario, senha, cpf, cargo, tempoCampus, tempoExp, tempoProfissional, tempoInstituicao, nivelCarreira, idade) value('Ricardo','123456','12345','12345','c', 6, 7, 10, 8, 3, 35);
insert into usuario(nome, prontuario, senha, cpf, cargo, tempoCampus, tempoExp, tempoProfissional, tempoInstituicao, nivelCarreira, idade) value('Eduardo Júnior','1990501','12345','12345','p', 5, 6, 7, 4, 6, 20);
insert into usuario(nome, prontuario, senha, cpf, cargo, tempoCampus, tempoExp, tempoProfissional, tempoInstituicao, nivelCarreira, idade) value('Gustavo Vasconselos','3005674','12345','12345','p', 4, 5, 9, 5, 8, 19);
insert into usuario(nome, prontuario, senha, cpf, cargo, tempoCampus, tempoExp, tempoProfissional, tempoInstituicao, nivelCarreira, idade) value('Érica Thalia','30919X','12345','12345','p', 2, 5, 7, 4, 6, 18);
insert into usuario(nome, prontuario, senha, cpf, cargo, tempoCampus, tempoExp, tempoProfissional, tempoInstituicao, nivelCarreira, idade) value('Lucas Donadi','3003159','12345','12345','p', 4, 8, 9, 6, 7, 24);

-- Insert de COMPONENTE
insert into componentes(idComponentes, nomeMateria, cursos_idCurso, periodo, horasSemanais) value('ISO', 'INTRODUÇÃO A SISTEMAS OPERACIONAIS', 'TSI', 'Noite', 4);
insert into componentes(idComponentes, nomeMateria, cursos_idCurso, periodo, horasSemanais) value('ADE', 'ADMINISTRAÇÃO E EMPREENDEDORISMO', 'ADS', 'Manhã  ', 4);
insert into componentes(idComponentes, nomeMateria, cursos_idCurso, periodo, horasSemanais) value('ASE', 'ADMINISTRAÇÃO DE SERVIDORES', 'TI', 'Noite', 4);
insert into componentes(idComponentes, nomeMateria, cursos_idCurso, periodo, horasSemanais) value('PJI', 'PROJETO INTEGRADOR', 'TII', 'Tarde', 4);
insert into componentes(idComponentes, nomeMateria, cursos_idCurso, periodo, horasSemanais) value('RDC', 'REDES DE COMPUTADORES', 'ADS', 'Manhã', 4);
insert into componentes(idComponentes, nomeMateria, cursos_idCurso, periodo, horasSemanais) value('IPW', 'INTRODUÇÃO A PROGRAMAÇÃO WEB', 'TII', 'Tarde', 8);
insert into componentes(idComponentes, nomeMateria, cursos_idCurso, periodo, horasSemanais) value('IMM', 'INTRODUÇÃO A MULTI MÍDIA', 'TI', 'Noite', 4);
insert into componentes(idComponentes, nomeMateria, cursos_idCurso, periodo, horasSemanais) value('IBD', 'INTRODUÇÃO A BANCO DE DADOS', 'TI', 'Noite', 4);
insert into componentes(idComponentes, nomeMateria, cursos_idCurso, periodo, horasSemanais) value('ABD', 'ADMINISTRAÇÃO DE BANCO DE DADOS', 'TI', 'Noite', 4);
insert into componentes(idComponentes, nomeMateria, cursos_idCurso, periodo, horasSemanais) value('EDD', 'ESTRUTURA DE DADOS', 'ADS', 'Manhã', 4);
insert into componentes(idComponentes, nomeMateria, cursos_idCurso, periodo, horasSemanais) value('POB', 'PROGRAMAÇÃO ORIENTADA A OBJETO', 'TSI', 'Noite', 8);

-- Insert de HORÁRIO
insert into horario(componente_idComponentes, diaSemana, horaInicio, horaFim) value('ISO', 'Quarta-feira', '19:00', '22:35');
insert into horario(componente_idComponentes, diaSemana, horaInicio, horaFim) value('ADE', 'Segunda-feira', '09:00', '11:35');
insert into horario(componente_idComponentes, diaSemana, horaInicio, horaFim) value('ASE', 'Quinta-feira', '19:00', '22:35');
insert into horario(componente_idComponentes, diaSemana, horaInicio, horaFim) value('PJI', 'Terça-feira', '12:35', '14:05');
insert into horario(componente_idComponentes, diaSemana, horaInicio, horaFim) value('RDC', 'Segunda-feira', '09:00', '11:35');
insert into horario(componente_idComponentes, diaSemana, horaInicio, horaFim) value('IPW', 'Quarta-feira', '16:20', '18:00');
insert into horario(componente_idComponentes, diaSemana, horaInicio, horaFim) value('IPW', 'Sexta-feira', '16:20', '18:00');
insert into horario(componente_idComponentes, diaSemana, horaInicio, horaFim) value('IMM', 'Quarta-feira', '19:00', '22:35');
insert into horario(componente_idComponentes, diaSemana, horaInicio, horaFim) value('IBD', 'Quinta-feira', '19:00', '22:35');
insert into horario(componente_idComponentes, diaSemana, horaInicio, horaFim) value('ABD', 'Terça-feira', '19:00', '22:35');
insert into horario(componente_idComponentes, diaSemana, horaInicio, horaFim) value('EDD', 'Quarta-feira', '09:00', '11:35');
insert into horario(componente_idComponentes, diaSemana, horaInicio, horaFim) value('POB', 'Quarta-feira', '19:00', '22:35');
insert into horario(componente_idComponentes, diaSemana, horaInicio, horaFim) value('POB', 'Sexta-feira', '19:00', '22:35');