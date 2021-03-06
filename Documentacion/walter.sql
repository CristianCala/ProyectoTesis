PGDMP     6                    y         	   homestead    9.5.24    9.5.24 ?    4	           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            5	           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            6	           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false            7	           1262    99428 	   homestead    DATABASE     ?   CREATE DATABASE homestead WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Spanish_Spain.1252' LC_CTYPE = 'Spanish_Spain.1252';
    DROP DATABASE homestead;
             postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false            8	           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    6            9	           0    0    SCHEMA public    ACL     ?   REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;
                  postgres    false    6                        3079    12355    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false            :	           0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    1            ?            1259    169950    acceso_clientes    TABLE     b  CREATE TABLE public.acceso_clientes (
    id bigint NOT NULL,
    acl_ip character varying(255) NOT NULL,
    acl_descripcion character varying(255) NOT NULL,
    acl_estatus character varying(255) NOT NULL,
    acl_pantalla character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 #   DROP TABLE public.acceso_clientes;
       public         postgres    false    6            ?            1259    169948    acceso_clientes_id_seq    SEQUENCE        CREATE SEQUENCE public.acceso_clientes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.acceso_clientes_id_seq;
       public       postgres    false    6    194            ;	           0    0    acceso_clientes_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.acceso_clientes_id_seq OWNED BY public.acceso_clientes.id;
            public       postgres    false    193            ?            1259    169942    accesos    TABLE     9  CREATE TABLE public.accesos (
    id bigint NOT NULL,
    acc_us_id integer NOT NULL,
    acc_rol_id integer NOT NULL,
    acc_mod_id integer NOT NULL,
    acc_pan_id integer NOT NULL,
    acc_ac_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.accesos;
       public         postgres    false    6            ?            1259    169940    accesos_id_seq    SEQUENCE     w   CREATE SEQUENCE public.accesos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.accesos_id_seq;
       public       postgres    false    6    192            <	           0    0    accesos_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.accesos_id_seq OWNED BY public.accesos.id;
            public       postgres    false    191            ?            1259    169961    acciones    TABLE     ?   CREATE TABLE public.acciones (
    id bigint NOT NULL,
    ac_tipo character varying(255) NOT NULL,
    ac_descripcion character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.acciones;
       public         postgres    false    6            ?            1259    169959    acciones_id_seq    SEQUENCE     x   CREATE SEQUENCE public.acciones_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.acciones_id_seq;
       public       postgres    false    6    196            =	           0    0    acciones_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.acciones_id_seq OWNED BY public.acciones.id;
            public       postgres    false    195            ?            1259    169972 
   auditorias    TABLE     ?  CREATE TABLE public.auditorias (
    id bigint NOT NULL,
    au_maquina character varying(255) NOT NULL,
    au_so character varying(255) NOT NULL,
    au_ip character varying(255) NOT NULL,
    au_navegador character varying(255) NOT NULL,
    au_fecha timestamp(0) without time zone NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.auditorias;
       public         postgres    false    6            ?            1259    169970    auditorias_id_seq    SEQUENCE     z   CREATE SEQUENCE public.auditorias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.auditorias_id_seq;
       public       postgres    false    198    6            >	           0    0    auditorias_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.auditorias_id_seq OWNED BY public.auditorias.id;
            public       postgres    false    197            ?            1259    169983    departamentos    TABLE       CREATE TABLE public.departamentos (
    id bigint NOT NULL,
    dep_nombre character varying(255) NOT NULL,
    dep_descripcion character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 !   DROP TABLE public.departamentos;
       public         postgres    false    6            ?            1259    169981    departamentos_id_seq    SEQUENCE     }   CREATE SEQUENCE public.departamentos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.departamentos_id_seq;
       public       postgres    false    200    6            ?	           0    0    departamentos_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.departamentos_id_seq OWNED BY public.departamentos.id;
            public       postgres    false    199            ?            1259    169994    equipos    TABLE     ?  CREATE TABLE public.equipos (
    id bigint NOT NULL,
    eq_modelo character varying(255) NOT NULL,
    eq_marca character varying(255) NOT NULL,
    eq_serial character varying(255) NOT NULL,
    eq_tequid integer NOT NULL,
    eq_nbiennacional character varying(255) NOT NULL,
    eq_estatus boolean NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.equipos;
       public         postgres    false    6            ?            1259    169992    equipos_id_seq    SEQUENCE     w   CREATE SEQUENCE public.equipos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.equipos_id_seq;
       public       postgres    false    202    6            @	           0    0    equipos_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.equipos_id_seq OWNED BY public.equipos.id;
            public       postgres    false    201            ?            1259    169904    failed_jobs    TABLE       CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT now() NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         postgres    false    6            ?            1259    169902    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public       postgres    false    187    6            A	           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
            public       postgres    false    186            ?            1259    170009    historico_movimientos    TABLE       CREATE TABLE public.historico_movimientos (
    id bigint NOT NULL,
    id_equipo character varying(255) NOT NULL,
    id_ubicacion character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 )   DROP TABLE public.historico_movimientos;
       public         postgres    false    6            ?            1259    170007    historico_movimientos_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.historico_movimientos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 3   DROP SEQUENCE public.historico_movimientos_id_seq;
       public       postgres    false    6    204            B	           0    0    historico_movimientos_id_seq    SEQUENCE OWNED BY     ]   ALTER SEQUENCE public.historico_movimientos_id_seq OWNED BY public.historico_movimientos.id;
            public       postgres    false    203            ?            1259    169876 
   migrations    TABLE     ?   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         postgres    false    6            ?            1259    169874    migrations_id_seq    SEQUENCE     z   CREATE SEQUENCE public.migrations_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public       postgres    false    6    182            C	           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
            public       postgres    false    181            ?            1259    170020    modulos    TABLE     ,  CREATE TABLE public.modulos (
    id bigint NOT NULL,
    mod_nombre character varying(255) NOT NULL,
    mod_descripcion character varying(255) NOT NULL,
    mod_estatus character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.modulos;
       public         postgres    false    6            ?            1259    170018    modulos_id_seq    SEQUENCE     w   CREATE SEQUENCE public.modulos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.modulos_id_seq;
       public       postgres    false    206    6            D	           0    0    modulos_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.modulos_id_seq OWNED BY public.modulos.id;
            public       postgres    false    205            ?            1259    170031    orden_salidas    TABLE     ?   CREATE TABLE public.orden_salidas (
    id bigint NOT NULL,
    ord_ubicacion character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 !   DROP TABLE public.orden_salidas;
       public         postgres    false    6            ?            1259    170029    orden_salidas_id_seq    SEQUENCE     }   CREATE SEQUENCE public.orden_salidas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.orden_salidas_id_seq;
       public       postgres    false    208    6            E	           0    0    orden_salidas_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.orden_salidas_id_seq OWNED BY public.orden_salidas.id;
            public       postgres    false    207            ?            1259    170039 	   pantallas    TABLE     .  CREATE TABLE public.pantallas (
    id bigint NOT NULL,
    pan_nombre character varying(255) NOT NULL,
    pan_descripcion character varying(255) NOT NULL,
    pan_estatus character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.pantallas;
       public         postgres    false    6            ?            1259    170037    pantallas_id_seq    SEQUENCE     y   CREATE SEQUENCE public.pantallas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.pantallas_id_seq;
       public       postgres    false    6    210            F	           0    0    pantallas_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.pantallas_id_seq OWNED BY public.pantallas.id;
            public       postgres    false    209            ?            1259    169895    password_resets    TABLE     ?   CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 #   DROP TABLE public.password_resets;
       public         postgres    false    6            ?            1259    169918    personal_access_tokens    TABLE     ?  CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 *   DROP TABLE public.personal_access_tokens;
       public         postgres    false    6            ?            1259    169916    personal_access_tokens_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.personal_access_tokens_id_seq;
       public       postgres    false    189    6            G	           0    0    personal_access_tokens_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;
            public       postgres    false    188            ?            1259    170050    prestamo_equipos    TABLE     ?  CREATE TABLE public.prestamo_equipos (
    id bigint NOT NULL,
    pres_salida integer NOT NULL,
    pres_fecha_salida timestamp(0) without time zone NOT NULL,
    pres_fecha_entrada timestamp(0) without time zone NOT NULL,
    usuarios_us_id integer NOT NULL,
    pres_estatus boolean NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 $   DROP TABLE public.prestamo_equipos;
       public         postgres    false    6            ?            1259    170048    prestamo_equipos_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.prestamo_equipos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.prestamo_equipos_id_seq;
       public       postgres    false    6    212            H	           0    0    prestamo_equipos_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.prestamo_equipos_id_seq OWNED BY public.prestamo_equipos.id;
            public       postgres    false    211            ?            1259    170102    rols    TABLE     ?   CREATE TABLE public.rols (
    id integer NOT NULL,
    rol_tipo character varying(255) NOT NULL,
    rol_descripcion character varying(255) NOT NULL,
    rol_estatus character varying(255) NOT NULL
);
    DROP TABLE public.rols;
       public         postgres    false    6            ?            1259    170100    rols_id_seq    SEQUENCE     t   CREATE SEQUENCE public.rols_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.rols_id_seq;
       public       postgres    false    222    6            I	           0    0    rols_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.rols_id_seq OWNED BY public.rols.id;
            public       postgres    false    221            ?            1259    169930    sessions    TABLE     ?   CREATE TABLE public.sessions (
    id character varying(255) NOT NULL,
    user_id bigint,
    ip_address character varying(45),
    user_agent text,
    payload text NOT NULL,
    last_activity integer NOT NULL
);
    DROP TABLE public.sessions;
       public         postgres    false    6            ?            1259    170058    tipo_equipos    TABLE        CREATE TABLE public.tipo_equipos (
    id bigint NOT NULL,
    teq_nombre character varying(255) NOT NULL,
    teq_descripcion character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
     DROP TABLE public.tipo_equipos;
       public         postgres    false    6            ?            1259    170056    tipo_equipos_id_seq    SEQUENCE     |   CREATE SEQUENCE public.tipo_equipos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.tipo_equipos_id_seq;
       public       postgres    false    6    214            J	           0    0    tipo_equipos_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.tipo_equipos_id_seq OWNED BY public.tipo_equipos.id;
            public       postgres    false    213            ?            1259    170069    tipo_usuarios    TABLE     -  CREATE TABLE public.tipo_usuarios (
    id bigint NOT NULL,
    tu_tipo character varying(255) NOT NULL,
    tu_descripcion character varying(255) NOT NULL,
    tu_estatus character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 !   DROP TABLE public.tipo_usuarios;
       public         postgres    false    6            ?            1259    170067    tipo_usuarios_id_seq    SEQUENCE     }   CREATE SEQUENCE public.tipo_usuarios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.tipo_usuarios_id_seq;
       public       postgres    false    6    216            K	           0    0    tipo_usuarios_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.tipo_usuarios_id_seq OWNED BY public.tipo_usuarios.id;
            public       postgres    false    215            ?            1259    170080    ubicacion_equipos    TABLE       CREATE TABLE public.ubicacion_equipos (
    id bigint NOT NULL,
    ubeq_nombre character varying(255) NOT NULL,
    ubeq_descripcion character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 %   DROP TABLE public.ubicacion_equipos;
       public         postgres    false    6            ?            1259    170078    ubicacion_equipos_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.ubicacion_equipos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.ubicacion_equipos_id_seq;
       public       postgres    false    6    218            L	           0    0    ubicacion_equipos_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.ubicacion_equipos_id_seq OWNED BY public.ubicacion_equipos.id;
            public       postgres    false    217            ?            1259    169884    users    TABLE     ?  CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    current_team_id bigint,
    profile_photo_path text,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    two_factor_secret text,
    two_factor_recovery_codes text
);
    DROP TABLE public.users;
       public         postgres    false    6            ?            1259    169882    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public       postgres    false    184    6            M	           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
            public       postgres    false    183            ?            1259    170091    usuario_x_departamentos    TABLE     V  CREATE TABLE public.usuario_x_departamentos (
    id bigint NOT NULL,
    usxdp_descripcion character varying(255) NOT NULL,
    usxdp_estatus character varying(255) NOT NULL,
    usxdp_uscedula integer NOT NULL,
    usxdp_dpid integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 +   DROP TABLE public.usuario_x_departamentos;
       public         postgres    false    6            ?            1259    170089    usuario_x_departamentos_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.usuario_x_departamentos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 5   DROP SEQUENCE public.usuario_x_departamentos_id_seq;
       public       postgres    false    220    6            N	           0    0    usuario_x_departamentos_id_seq    SEQUENCE OWNED BY     a   ALTER SEQUENCE public.usuario_x_departamentos_id_seq OWNED BY public.usuario_x_departamentos.id;
            public       postgres    false    219            O           2604    169953    id    DEFAULT     x   ALTER TABLE ONLY public.acceso_clientes ALTER COLUMN id SET DEFAULT nextval('public.acceso_clientes_id_seq'::regclass);
 A   ALTER TABLE public.acceso_clientes ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    194    193    194            N           2604    169945    id    DEFAULT     h   ALTER TABLE ONLY public.accesos ALTER COLUMN id SET DEFAULT nextval('public.accesos_id_seq'::regclass);
 9   ALTER TABLE public.accesos ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    191    192    192            P           2604    169964    id    DEFAULT     j   ALTER TABLE ONLY public.acciones ALTER COLUMN id SET DEFAULT nextval('public.acciones_id_seq'::regclass);
 :   ALTER TABLE public.acciones ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    195    196    196            Q           2604    169975    id    DEFAULT     n   ALTER TABLE ONLY public.auditorias ALTER COLUMN id SET DEFAULT nextval('public.auditorias_id_seq'::regclass);
 <   ALTER TABLE public.auditorias ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    198    197    198            R           2604    169986    id    DEFAULT     t   ALTER TABLE ONLY public.departamentos ALTER COLUMN id SET DEFAULT nextval('public.departamentos_id_seq'::regclass);
 ?   ALTER TABLE public.departamentos ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    200    199    200            S           2604    169997    id    DEFAULT     h   ALTER TABLE ONLY public.equipos ALTER COLUMN id SET DEFAULT nextval('public.equipos_id_seq'::regclass);
 9   ALTER TABLE public.equipos ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    201    202    202            K           2604    169907    id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    186    187    187            T           2604    170012    id    DEFAULT     ?   ALTER TABLE ONLY public.historico_movimientos ALTER COLUMN id SET DEFAULT nextval('public.historico_movimientos_id_seq'::regclass);
 G   ALTER TABLE public.historico_movimientos ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    203    204    204            I           2604    169879    id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    181    182    182            U           2604    170023    id    DEFAULT     h   ALTER TABLE ONLY public.modulos ALTER COLUMN id SET DEFAULT nextval('public.modulos_id_seq'::regclass);
 9   ALTER TABLE public.modulos ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    206    205    206            V           2604    170034    id    DEFAULT     t   ALTER TABLE ONLY public.orden_salidas ALTER COLUMN id SET DEFAULT nextval('public.orden_salidas_id_seq'::regclass);
 ?   ALTER TABLE public.orden_salidas ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    207    208    208            W           2604    170042    id    DEFAULT     l   ALTER TABLE ONLY public.pantallas ALTER COLUMN id SET DEFAULT nextval('public.pantallas_id_seq'::regclass);
 ;   ALTER TABLE public.pantallas ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    210    209    210            M           2604    169921    id    DEFAULT     ?   ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);
 H   ALTER TABLE public.personal_access_tokens ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    189    188    189            X           2604    170053    id    DEFAULT     z   ALTER TABLE ONLY public.prestamo_equipos ALTER COLUMN id SET DEFAULT nextval('public.prestamo_equipos_id_seq'::regclass);
 B   ALTER TABLE public.prestamo_equipos ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    211    212    212            ]           2604    170105    id    DEFAULT     b   ALTER TABLE ONLY public.rols ALTER COLUMN id SET DEFAULT nextval('public.rols_id_seq'::regclass);
 6   ALTER TABLE public.rols ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    222    221    222            Y           2604    170061    id    DEFAULT     r   ALTER TABLE ONLY public.tipo_equipos ALTER COLUMN id SET DEFAULT nextval('public.tipo_equipos_id_seq'::regclass);
 >   ALTER TABLE public.tipo_equipos ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    214    213    214            Z           2604    170072    id    DEFAULT     t   ALTER TABLE ONLY public.tipo_usuarios ALTER COLUMN id SET DEFAULT nextval('public.tipo_usuarios_id_seq'::regclass);
 ?   ALTER TABLE public.tipo_usuarios ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    216    215    216            [           2604    170083    id    DEFAULT     |   ALTER TABLE ONLY public.ubicacion_equipos ALTER COLUMN id SET DEFAULT nextval('public.ubicacion_equipos_id_seq'::regclass);
 C   ALTER TABLE public.ubicacion_equipos ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    217    218    218            J           2604    169887    id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    183    184    184            \           2604    170094    id    DEFAULT     ?   ALTER TABLE ONLY public.usuario_x_departamentos ALTER COLUMN id SET DEFAULT nextval('public.usuario_x_departamentos_id_seq'::regclass);
 I   ALTER TABLE public.usuario_x_departamentos ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    219    220    220            	          0    169950    acceso_clientes 
   TABLE DATA               y   COPY public.acceso_clientes (id, acl_ip, acl_descripcion, acl_estatus, acl_pantalla, created_at, updated_at) FROM stdin;
    public       postgres    false    194   {?       O	           0    0    acceso_clientes_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.acceso_clientes_id_seq', 1, false);
            public       postgres    false    193            	          0    169942    accesos 
   TABLE DATA               w   COPY public.accesos (id, acc_us_id, acc_rol_id, acc_mod_id, acc_pan_id, acc_ac_id, created_at, updated_at) FROM stdin;
    public       postgres    false    192   ??       P	           0    0    accesos_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.accesos_id_seq', 1, false);
            public       postgres    false    191            	          0    169961    acciones 
   TABLE DATA               W   COPY public.acciones (id, ac_tipo, ac_descripcion, created_at, updated_at) FROM stdin;
    public       postgres    false    196   ??       Q	           0    0    acciones_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.acciones_id_seq', 1, false);
            public       postgres    false    195            	          0    169972 
   auditorias 
   TABLE DATA               r   COPY public.auditorias (id, au_maquina, au_so, au_ip, au_navegador, au_fecha, created_at, updated_at) FROM stdin;
    public       postgres    false    198   Ҿ       R	           0    0    auditorias_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.auditorias_id_seq', 1, false);
            public       postgres    false    197            	          0    169983    departamentos 
   TABLE DATA               `   COPY public.departamentos (id, dep_nombre, dep_descripcion, created_at, updated_at) FROM stdin;
    public       postgres    false    200   ??       S	           0    0    departamentos_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.departamentos_id_seq', 3, true);
            public       postgres    false    199            	          0    169994    equipos 
   TABLE DATA               ?   COPY public.equipos (id, eq_modelo, eq_marca, eq_serial, eq_tequid, eq_nbiennacional, eq_estatus, created_at, updated_at) FROM stdin;
    public       postgres    false    202   ??       T	           0    0    equipos_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.equipos_id_seq', 1, true);
            public       postgres    false    201            	          0    169904    failed_jobs 
   TABLE DATA               a   COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    public       postgres    false    187   Կ       U	           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
            public       postgres    false    186            	          0    170009    historico_movimientos 
   TABLE DATA               d   COPY public.historico_movimientos (id, id_equipo, id_ubicacion, created_at, updated_at) FROM stdin;
    public       postgres    false    204   ??       V	           0    0    historico_movimientos_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.historico_movimientos_id_seq', 1, false);
            public       postgres    false    203            		          0    169876 
   migrations 
   TABLE DATA               :   COPY public.migrations (id, migration, batch) FROM stdin;
    public       postgres    false    182   ?       W	           0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 22, true);
            public       postgres    false    181            !	          0    170020    modulos 
   TABLE DATA               g   COPY public.modulos (id, mod_nombre, mod_descripcion, mod_estatus, created_at, updated_at) FROM stdin;
    public       postgres    false    206   ??       X	           0    0    modulos_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.modulos_id_seq', 1, false);
            public       postgres    false    205            #	          0    170031    orden_salidas 
   TABLE DATA               R   COPY public.orden_salidas (id, ord_ubicacion, created_at, updated_at) FROM stdin;
    public       postgres    false    208   ??       Y	           0    0    orden_salidas_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.orden_salidas_id_seq', 1, false);
            public       postgres    false    207            %	          0    170039 	   pantallas 
   TABLE DATA               i   COPY public.pantallas (id, pan_nombre, pan_descripcion, pan_estatus, created_at, updated_at) FROM stdin;
    public       postgres    false    210   ??       Z	           0    0    pantallas_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.pantallas_id_seq', 1, false);
            public       postgres    false    209            	          0    169895    password_resets 
   TABLE DATA               C   COPY public.password_resets (email, token, created_at) FROM stdin;
    public       postgres    false    185   ??       	          0    169918    personal_access_tokens 
   TABLE DATA               ?   COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, created_at, updated_at) FROM stdin;
    public       postgres    false    189   ?       [	           0    0    personal_access_tokens_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);
            public       postgres    false    188            '	          0    170050    prestamo_equipos 
   TABLE DATA               ?   COPY public.prestamo_equipos (id, pres_salida, pres_fecha_salida, pres_fecha_entrada, usuarios_us_id, pres_estatus, created_at, updated_at) FROM stdin;
    public       postgres    false    212   ,?       \	           0    0    prestamo_equipos_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.prestamo_equipos_id_seq', 1, false);
            public       postgres    false    211            1	          0    170102    rols 
   TABLE DATA               J   COPY public.rols (id, rol_tipo, rol_descripcion, rol_estatus) FROM stdin;
    public       postgres    false    222   I?       ]	           0    0    rols_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.rols_id_seq', 3, true);
            public       postgres    false    221            	          0    169930    sessions 
   TABLE DATA               _   COPY public.sessions (id, user_id, ip_address, user_agent, payload, last_activity) FROM stdin;
    public       postgres    false    190   ??       )	          0    170058    tipo_equipos 
   TABLE DATA               _   COPY public.tipo_equipos (id, teq_nombre, teq_descripcion, created_at, updated_at) FROM stdin;
    public       postgres    false    214   ??       ^	           0    0    tipo_equipos_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.tipo_equipos_id_seq', 5, true);
            public       postgres    false    213            +	          0    170069    tipo_usuarios 
   TABLE DATA               h   COPY public.tipo_usuarios (id, tu_tipo, tu_descripcion, tu_estatus, created_at, updated_at) FROM stdin;
    public       postgres    false    216   6?       _	           0    0    tipo_usuarios_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.tipo_usuarios_id_seq', 1, false);
            public       postgres    false    215            -	          0    170080    ubicacion_equipos 
   TABLE DATA               f   COPY public.ubicacion_equipos (id, ubeq_nombre, ubeq_descripcion, created_at, updated_at) FROM stdin;
    public       postgres    false    218   S?       `	           0    0    ubicacion_equipos_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.ubicacion_equipos_id_seq', 1, false);
            public       postgres    false    217            	          0    169884    users 
   TABLE DATA               ?   COPY public.users (id, name, email, email_verified_at, password, remember_token, current_team_id, profile_photo_path, created_at, updated_at, two_factor_secret, two_factor_recovery_codes) FROM stdin;
    public       postgres    false    184   p?       a	           0    0    users_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.users_id_seq', 1, true);
            public       postgres    false    183            /	          0    170091    usuario_x_departamentos 
   TABLE DATA               ?   COPY public.usuario_x_departamentos (id, usxdp_descripcion, usxdp_estatus, usxdp_uscedula, usxdp_dpid, created_at, updated_at) FROM stdin;
    public       postgres    false    220   ?       b	           0    0    usuario_x_departamentos_id_seq    SEQUENCE SET     M   SELECT pg_catalog.setval('public.usuario_x_departamentos_id_seq', 1, false);
            public       postgres    false    219            u           2606    169958    acceso_clientes_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.acceso_clientes
    ADD CONSTRAINT acceso_clientes_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.acceso_clientes DROP CONSTRAINT acceso_clientes_pkey;
       public         postgres    false    194    194            s           2606    169947    accesos_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.accesos
    ADD CONSTRAINT accesos_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.accesos DROP CONSTRAINT accesos_pkey;
       public         postgres    false    192    192            w           2606    169969    acciones_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.acciones
    ADD CONSTRAINT acciones_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.acciones DROP CONSTRAINT acciones_pkey;
       public         postgres    false    196    196            y           2606    169980    auditorias_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.auditorias
    ADD CONSTRAINT auditorias_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.auditorias DROP CONSTRAINT auditorias_pkey;
       public         postgres    false    198    198            {           2606    169991    departamentos_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.departamentos
    ADD CONSTRAINT departamentos_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.departamentos DROP CONSTRAINT departamentos_pkey;
       public         postgres    false    200    200            }           2606    170006    equipos_eq_nbiennacional_unique 
   CONSTRAINT     n   ALTER TABLE ONLY public.equipos
    ADD CONSTRAINT equipos_eq_nbiennacional_unique UNIQUE (eq_nbiennacional);
 Q   ALTER TABLE ONLY public.equipos DROP CONSTRAINT equipos_eq_nbiennacional_unique;
       public         postgres    false    202    202                       2606    170004    equipos_eq_serial_unique 
   CONSTRAINT     `   ALTER TABLE ONLY public.equipos
    ADD CONSTRAINT equipos_eq_serial_unique UNIQUE (eq_serial);
 J   ALTER TABLE ONLY public.equipos DROP CONSTRAINT equipos_eq_serial_unique;
       public         postgres    false    202    202            ?           2606    170002    equipos_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.equipos
    ADD CONSTRAINT equipos_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.equipos DROP CONSTRAINT equipos_pkey;
       public         postgres    false    202    202            f           2606    169913    failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public         postgres    false    187    187            h           2606    169915    failed_jobs_uuid_unique 
   CONSTRAINT     ^   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);
 M   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_uuid_unique;
       public         postgres    false    187    187            ?           2606    170017    historico_movimientos_pkey 
   CONSTRAINT     n   ALTER TABLE ONLY public.historico_movimientos
    ADD CONSTRAINT historico_movimientos_pkey PRIMARY KEY (id);
 Z   ALTER TABLE ONLY public.historico_movimientos DROP CONSTRAINT historico_movimientos_pkey;
       public         postgres    false    204    204            _           2606    169881    migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public         postgres    false    182    182            ?           2606    170028    modulos_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.modulos
    ADD CONSTRAINT modulos_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.modulos DROP CONSTRAINT modulos_pkey;
       public         postgres    false    206    206            ?           2606    170036    orden_salidas_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.orden_salidas
    ADD CONSTRAINT orden_salidas_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.orden_salidas DROP CONSTRAINT orden_salidas_pkey;
       public         postgres    false    208    208            ?           2606    170047    pantallas_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.pantallas
    ADD CONSTRAINT pantallas_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.pantallas DROP CONSTRAINT pantallas_pkey;
       public         postgres    false    210    210            j           2606    169926    personal_access_tokens_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_pkey;
       public         postgres    false    189    189            l           2606    169929 #   personal_access_tokens_token_unique 
   CONSTRAINT     v   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);
 d   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_token_unique;
       public         postgres    false    189    189            ?           2606    170055    prestamo_equipos_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.prestamo_equipos
    ADD CONSTRAINT prestamo_equipos_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.prestamo_equipos DROP CONSTRAINT prestamo_equipos_pkey;
       public         postgres    false    212    212            ?           2606    170110 	   rols_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.rols
    ADD CONSTRAINT rols_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.rols DROP CONSTRAINT rols_pkey;
       public         postgres    false    222    222            p           2606    169937    sessions_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.sessions
    ADD CONSTRAINT sessions_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.sessions DROP CONSTRAINT sessions_pkey;
       public         postgres    false    190    190            ?           2606    170066    tipo_equipos_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.tipo_equipos
    ADD CONSTRAINT tipo_equipos_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.tipo_equipos DROP CONSTRAINT tipo_equipos_pkey;
       public         postgres    false    214    214            ?           2606    170077    tipo_usuarios_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.tipo_usuarios
    ADD CONSTRAINT tipo_usuarios_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.tipo_usuarios DROP CONSTRAINT tipo_usuarios_pkey;
       public         postgres    false    216    216            ?           2606    170088    ubicacion_equipos_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.ubicacion_equipos
    ADD CONSTRAINT ubicacion_equipos_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.ubicacion_equipos DROP CONSTRAINT ubicacion_equipos_pkey;
       public         postgres    false    218    218            a           2606    169894    users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public         postgres    false    184    184            c           2606    169892 
   users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public         postgres    false    184    184            ?           2606    170099    usuario_x_departamentos_pkey 
   CONSTRAINT     r   ALTER TABLE ONLY public.usuario_x_departamentos
    ADD CONSTRAINT usuario_x_departamentos_pkey PRIMARY KEY (id);
 ^   ALTER TABLE ONLY public.usuario_x_departamentos DROP CONSTRAINT usuario_x_departamentos_pkey;
       public         postgres    false    220    220            d           1259    169901    password_resets_email_index    INDEX     X   CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);
 /   DROP INDEX public.password_resets_email_index;
       public         postgres    false    185            m           1259    169927 8   personal_access_tokens_tokenable_type_tokenable_id_index    INDEX     ?   CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);
 L   DROP INDEX public.personal_access_tokens_tokenable_type_tokenable_id_index;
       public         postgres    false    189    189            n           1259    169939    sessions_last_activity_index    INDEX     Z   CREATE INDEX sessions_last_activity_index ON public.sessions USING btree (last_activity);
 0   DROP INDEX public.sessions_last_activity_index;
       public         postgres    false    190            q           1259    169938    sessions_user_id_index    INDEX     N   CREATE INDEX sessions_user_id_index ON public.sessions USING btree (user_id);
 *   DROP INDEX public.sessions_user_id_index;
       public         postgres    false    190            	      x?????? ? ?      	      x?????? ? ?      	      x?????? ? ?      	      x?????? ? ?      	   ?   x???A
?0??ur?9??#Եq?? C2h!?Wf???7B/ ??????.IQ??9?????B.4??Ғ1%(?7?p?VX??:'?$?ӧ??JA??}?Fh????|a?Ԥ?|Ϝ?MR3??n+<??q?yb?_Q?D?      	   =   x?3????45?tI???442615?4?08K8??u?t,?????M??q??qqq .      	      x?????? ? ?      	      x?????? ? ?      		   }  x?u??n? ?ׇY8??.KN?Ҍ?\???6r??1??>?8!A?????a?*hZ?^<u??? T?Myw?H??:d??
>5?jn???u????????:??*?U?G?t???'??&?8????nV??0h????s6?h"?2? L?q{N,?xr)ڝ}\?2?ը?????=??????+??H??a?2?G????5??့\???oj	j???????????J?W?`qg???rM??L?E?R?ɍ?-YY??eji\>=?W֌e?mm`?"????%]OW?>Wq??[?^K??,ô!??B=e	2/?CX??SX?Z"?4??b???K?'.9?>??G??g???>>?31?R?g3???4???T	      !	      x?????? ? ?      #	      x?????? ? ?      %	      x?????? ? ?      	      x?????? ? ?      	      x?????? ? ?      '	      x?????? ? ?      1	   P   x?M?1? й=?'0Q??? C??R<?qA???g?T?QDsC?.?$????*?;`+t??_?h?)?X!???#??? L?%?      	     x?U??n?0???S?l??6??L˥?5n	7??pI???QC??Su1??s?s~?^??0ڝ?`?6?H؛???y<?????AM|wV ?2/??bb??MV????+1\$??t?Kۮ???P??~?!CF?t?????g???ʓ????O?6?⨪H?!??>????WFނ??/?
0d`+
H??D?︩????$l	??F#%Aj????U]??S?P?Ǘ????c?1r2????O?y?lF??c?3?)?I(X?oY?u??]?פ???:??R?2??y0???z??8ܡ?f???ԑ4??W?}??????%
?"1?sf?Y{?ڱ.????~3]???L?hc??e;g?X??y??X???S??֞??9e.???kI?>?0R?K?=h|Hq??w?	['?$???p?d/???S?[??b>?U???.L??4ϲ?	r??Jig?>??*|??};?8?@?t??????9??>u???????c??N????Z????_y?^d??b      )	   a   x?3?IM?IL??t-V(?S(??b???ˈ3(?$??3,WfCd?9}??2K???r?PDք?9?8*?bB?M9????RK!R?
?P.D:F??? ??+?      +	      x?????? ? ?      -	      x?????? ? ?      	   ?   x?3?O?)I-Rp/-?L-*J??LN,??t(?/??K-????T1?T14P	?2H.)p+?4?+????5q?0,5u?*wK??v???2?H?.M?p???0?
????? ##C]3]#c+C+S#?b`?\1z\\\ i+5      /	      x?????? ? ?     