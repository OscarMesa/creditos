CREATE TABLE "cliente" (
"cedula" int8 NOT NULL,
"nombres" varchar(80) NOT NULL,
"apellidos" varchar(80),
"telefono" varchar(30),
"correo" varchar(50) NOT NULL,
"celular" varchar(30),
"direccion" varchar(50),
"solo_codeudor" BOOLEAN  DEFAULT true,
"estado_cliente" int8,
"pension" int8 NOT NULL,
"tp_vinculacion_eps" int8 NOT NULL,
"eps" int8 NOT NULL,
PRIMARY KEY ("cedula") 
);

COMMENT ON COLUMN "cliente"."solo_codeudor" IS 'La idea es que un codeudor se pueda convertir en un cliente, pero si solo es un codeudor saber diferenciarlo. Ademas un cliente tambien puede ser un codeudor.';

CREATE TABLE "informacion_laboral" (
"id" serial8 NOT NULL,
"cliente" int8 NOT NULL,
"nombre_compañia" varchar(100) NOT NULL,
"direccion" varchar(80),
"telefono" varchar(80),
"celular" varchar(80),
"cargo" int8 NOT NULL,
"salario" float8,
"tiempo_laborado" timestamp,
"contrato" tipo_contrato,
PRIMARY KEY ("id") 
);

CREATE TABLE "cargos" (
"id" serial8 NOT NULL,
"descripcion" varchar(50),
PRIMARY KEY ("id") 
);

CREATE TABLE "referencias" (
"id" serial8 NOT NULL,
"tipo_referencia" int8 NOT NULL,
"parentesco" int8,
"nombres" varchar(100) NOT NULL,
"calular" varchar(20),
"telefono" varchar(15),
"direccion" varchar(30),
"cliente" int8 NOT NULL,
PRIMARY KEY ("id") 
);

CREATE TABLE "tipo_referencia" (
"id" serial8 NOT NULL,
"descripcion" varchar(30) NOT NULL,
PRIMARY KEY ("id") 
);

CREATE TABLE "parentesco_referencia" (
"id" serial8 NOT NULL,
"descripcion" varchar(30) NOT NULL,
PRIMARY KEY ("id") 
);

CREATE TABLE "solicitud_prestamo" (
"id" serial8 NOT NULL,
"cliente" int8 NOT NULL,
"cantidad_prestamo" float8 NOT NULL,
"interes" int8 NOT NULL,
"duracion" int8 NOT NULL,
"estado_solicitud" int8,
PRIMARY KEY ("id") 
);

CREATE TABLE "codeudor" (
"cedula_cliente" int8 NOT NULL,
"cedula_codeudor" int8 NOT NULL,
PRIMARY KEY ("cedula_cliente", "cedula_codeudor") 
);

CREATE TABLE "abono_prestamo" (
"id" serial8 NOT NULL,
"cliente" int8 NOT NULL,
"tipo_abono" int8 NOT NULL,
"valor_abono" float8 NOT NULL,
PRIMARY KEY ("id") 
);

CREATE TABLE "tipo_abono" (
"id" serial8 NOT NULL,
"descripcion" varchar(50),
PRIMARY KEY ("id") 
);

CREATE TABLE "estado_cliente" (
"id" int8 NOT NULL,
"descripcion" varchar(80) NOT NULL,
PRIMARY KEY ("id") 
);

CREATE TABLE "estado_solicitud" (
"id" int8 NOT NULL,
"descripcion" varchar(50) NOT NULL,
PRIMARY KEY ("id") 
);

CREATE TABLE "eps" (
"id" serial8 NOT NULL,
"descripcion" varchar(90),
PRIMARY KEY ("id") 
);

CREATE TABLE "tipo_vinculacion_eps" (
"id" serial8 NOT NULL,
"descripcion" varchar NOT NULL,
PRIMARY KEY ("id") 
);

CREATE TABLE "pesiones" (
"id" serial8 NOT NULL,
"pension" varchar(80),
PRIMARY KEY ("id") 
);


ALTER TABLE "informacion_laboral" ADD CONSTRAINT "fk_informacion_laboral_cliente" FOREIGN KEY ("cliente") REFERENCES "cliente" ("cedula");
ALTER TABLE "informacion_laboral" ADD CONSTRAINT "fk_cargo" FOREIGN KEY ("cargo") REFERENCES "cargos" ("id");
ALTER TABLE "referencias" ADD CONSTRAINT "fk_tipo_referencia" FOREIGN KEY ("tipo_referencia") REFERENCES "tipo_referencia" ("id");
ALTER TABLE "referencias" ADD CONSTRAINT "fk_parentesco" FOREIGN KEY ("parentesco") REFERENCES "parentesco_referencia" ("id");
ALTER TABLE "referencias" ADD CONSTRAINT "fk_referencia_cliente" FOREIGN KEY ("cliente") REFERENCES "cliente" ("cedula");
ALTER TABLE "codeudor" ADD CONSTRAINT "fk_cliente" FOREIGN KEY ("cedula_cliente") REFERENCES "cliente" ("cedula");
ALTER TABLE "codeudor" ADD CONSTRAINT "fk_codeudor" FOREIGN KEY () REFERENCES "cliente" ("cedula");
ALTER TABLE "solicitud_prestamo" ADD CONSTRAINT "fk_solicitud_prestamo_cliente" FOREIGN KEY ("cliente") REFERENCES "cliente" ("cedula");
ALTER TABLE "abono_prestamo" ADD CONSTRAINT "fk_abono_prestamo_cliente" FOREIGN KEY ("cliente") REFERENCES "cliente" ("cedula");
ALTER TABLE "abono_prestamo" ADD CONSTRAINT "fk_abono_prestamo_tipo_abono" FOREIGN KEY ("tipo_abono") REFERENCES "tipo_abono" ("id");
ALTER TABLE "cliente" ADD CONSTRAINT "fk_cliente_estado_cliente" FOREIGN KEY ("estado_cliente") REFERENCES "estado_cliente" ("id");
ALTER TABLE "solicitud_prestamo" ADD CONSTRAINT "fk_estado_solicitud_prestamo" FOREIGN KEY ("estado_solicitud") REFERENCES "estado_solicitud" ("id");
ALTER TABLE "cliente" ADD CONSTRAINT "fk_cliente_eps" FOREIGN KEY ("eps") REFERENCES "eps" ("id");
ALTER TABLE "cliente" ADD CONSTRAINT "fk_cliente_tp_vinuculacion" FOREIGN KEY ("tp_vinculacion_eps") REFERENCES "tipo_vinculacion_eps" ("id");
ALTER TABLE "cliente" ADD CONSTRAINT "fk_cliente_pension" FOREIGN KEY ("pension") REFERENCES "pesiones" ("id");

