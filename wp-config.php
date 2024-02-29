<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'primeiro-wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'sa3223' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ptw()pTTSTkxSz.#>iZ%Zl{FT}l<kY3:Nr@w)5$EJx_?=/*c.,bS>KH@IZt~BvFg' );
define( 'SECURE_AUTH_KEY',  'AJ4k[R>HC]y=FJNLX2#pN(.n4x0m,N+QO-vtt>SAvT$3=Bu~Gn/v}L+`(VxyFG;v' );
define( 'LOGGED_IN_KEY',    '^>H|)mRYUS ->C0t;-zR^jQ)Yzk8:mT2$ R>AkFXY.U13:Z-#j4y9F6o=FI`@$6w' );
define( 'NONCE_KEY',        'T-g<iSRDNg;eo.Qc]Y!B*/k%[398a)#F)H<+*i(WmQ$Pz88&5kq5Rj:Npd165|X>' );
define( 'AUTH_SALT',        ',y@6FraeTC9AO^cgt15Xi6ff]A-V?ws8px9Sv1bxPzGWZw#wKPoBi]^4u=H_/N,r' );
define( 'SECURE_AUTH_SALT', '~k<C#=Tz!yH`?*l30Hx5c57x*NA8N>]%?z7G$DNvB-L,q-9xoPBkZhk,h6,LpetW' );
define( 'LOGGED_IN_SALT',   'zlgX%c*/AX57ih(A<hk^5X8fJ~8!f p&;44_xNj$7}?2.(kjwWyM.N<cgBsv B=+' );
define( 'NONCE_SALT',       '7r,8##qMJwC<MUH;FA}($y0TPIJ`8K+l$gjkceA$/(`hQ<OTO3*Zg$EJx%=7ddRS' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
