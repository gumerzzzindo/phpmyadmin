<?php
/* $Id$ */

/**
 * Translated by Yukihiro Kawada <kawada at den.fujifilm.co.jp>
 *               Tadashi Jokagi <elf2000 at users.sourceforge.net>
 */

$charset = 'euc-jp';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = '"MS PGochic", Osaka, verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = '"MS PGochic", Osaka, arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('バイト', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('日', '月', '火', '水', '木', '金', '土');
$month = array('1 月','2 月','3 月','4 月','5 月','6 月','7 月','8 月','9 月','10 月','11 月','12 月');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%Y 年 %B %d 日 %H:%M';
$timespanfmt = '%s 日 %s 時間 %s 分 %s 秒';

$strAPrimaryKey = '主キーが %s に追加されました。';
$strAbortedClients = '中断';
$strAbsolutePathToDocSqlDir = 'docSQL への絶対パスを設定してください。';
$strAccessDenied = 'アクセスは拒否されました。';
$strAccessDeniedExplanation = 'phpMyAdmin は、MySQL サーバーに接続しようとしました。そして、サーバーは接続を拒絶しました。config.inc.php の中のホスト、ユーザー名およびパスワードをチェックし、MySQL サーバーの管理人から与えられた情報にそれらが相当することを確かめるべきです。';
$strAction = '実行する';
$strAddAutoIncrement = '「AUTO_INCREMENT」値を追加する';
$strAddConstraints = '制限追加する';
$strAddDeleteColumn = 'フィールド列の「追加/削除」';
$strAddDeleteRow = '条件行の「追加/削除」';
$strAddDropDatabase = '「DROP DATABASE」を追加する';
$strAddFields = '%s 個のフィールドを追加する';
$strAddHeaderComment = 'ヘッダーへカスタムコメントを追加 (\\n で改行)';
$strAddIfNotExists = '「IF NOT EXISTS」を追加する';
$strAddIntoComments = 'コメント追加する';
$strAddNewField = 'フィールドの追加する';
$strAddPrivilegesOnDb = 'データベースへ特権の追加する';
$strAddPrivilegesOnTbl = 'テーブルへ特権の追加する';
$strAddSearchConditions = '検索条件文を追加してください。("where"の節文):';
$strAddToIndex = ' &nbsp;%s&nbsp; の列をインデックスに追加しました';
$strAddUser = 'ユーザーの追加する';
$strAddUserMessage = 'ユーザーを追加しました。';
$strAddedColumnComment = 'カラムのコメント追加されました。';
$strAddedColumnRelation = 'カラムのリレーションが追加されました。';
$strAdministration = '管理';
$strAffectedRows = '影響された行数:';
$strAfter = '指定カラムの後に %s';
$strAfterInsertBack = '戻る';
$strAfterInsertNewInsert = '新レコードを追加する';
$strAfterInsertNext = '次の行を編集する';
$strAfterInsertSame = 'このページに戻る';
$strAll = '全部';
$strAllTableSameWidth = '全てのテーブルを同じ幅で表示しますか?';
$strAlterOrderBy = 'テーブル順番の条件';
$strAnIndex = 'インデックスが%sに追加されていました。';
$strAnalyzeTable = 'テーブルを分析する';
$strAnd = 'AND';
$strAny = '全て';
$strAnyHost = '全てのホスト';
$strAnyUser = '全てのユーザー';
$strApproximateCount = '近似かもしれません。FAQ 3.11 を参照してください。';
$strArabic = 'アラビア語';
$strArmenian = 'アルメニア語';
$strAscending = '昇順';
$strAtBeginningOfTable = 'テーブルの先頭';
$strAtEndOfTable = 'テーブルの末尾';
$strAttr = '表示する';
$strAutodetect = '自動検知する';
$strAutomaticLayout = '自動レイアウト';

$strBack = '戻る';
$strBaltic = 'バルト諸語';
$strBeginCut = '切り取り開始';
$strBeginRaw = 'RAW 開始';
$strBinLogEventType = 'イベントタイプ';
$strBinLogInfo = '情報';
$strBinLogName = 'ログ名';
$strBinLogOriginalPosition = '元の位置';
$strBinLogPosition = '位置';
$strBinLogServerId = 'サーバー ID';
$strBinary = ' バイナリ ';
$strBinaryDoNotEdit = ' バイナリ - 修正できません';
$strBinaryLog = 'バイナリログ';
$strBookmarkAllUsers = 'すべてのユーザーがこのブックマークをアクセスできる';
$strBookmarkDeleted = 'ブックマークを正常に削除しました。';
$strBookmarkLabel = 'ラベル';
$strBookmarkOptions = 'ブックマークオプション';
$strBookmarkQuery = 'ブックマークされている SQL 照会';
$strBookmarkThis = 'SQL 照会をブックマークする';
$strBookmarkView = '表示のみ';
$strBrowse = '表示';
$strBrowseForeignValues = '外部キーを表示する';
$strBufferPool = 'バッファプール';
$strBufferPoolUsage = 'バッファプールの使用量';
$strBufferReadMisses = '読み込みミス数';
$strBufferReadMissesInPercent = '% の読み込みミス数';
$strBufferWriteWaits = '書き込み待ち数';
$strBufferWriteWaitsInPercent = '% の書き込み待ち数';
$strBulgarian = 'ブルガリア語';
$strBusyPages = 'ビジーなページ数';
$strBzError = 'この php バージョンは Bz2 拡張が壊れているので phpMyAdmin が圧縮ダンプできません。phpMyAdmin のコンフィグレーションファイルの <code>$cfg[\'BZipDump\']</code> を <code>FALSE</code>に設定してください。Bz2 圧縮機能を使いたい場合には php のバージョンを上げて下さい。php バグ報告 %s 詳細。';
$strBzip = '"bzip 方式"';

$strCSVOptions = 'CSV オプション';
$strCalendar = 'カレンダー';
$strCannotLogin = 'MySQL サーバーにログインできません';
$strCantLoad = '扱えない拡張子のファイルです,<br />PHP の設定をチェックしてください。';
$strCantLoadRecodeIconv = '文字セット変換を行うためには組み込まれていない iconv または GNU recode の拡張が必要です。php に、この拡張設定を行っておくか、phpMyAdminでは文字セット変換をしない設定にしてください。';
$strCantRenameIdxToPrimary = 'インデックスの名前を PRIMARY に変更できません。';
$strCantUseRecodeIconv = 'iconv、libiconv、recode_string のどの関数も使用できません。php の設定をチェックしてください。';
$strCardinality = 'カーディナリティ';
$strCarriage = 'キャリッジリターン: \\r';
$strCaseInsensitive = '英字の大小を区別しない';
$strCaseSensitive = '英字の大小を区別する';
$strCentralEuropean = '中央ヨーロッパ人';
$strChange = '変更';
$strChangeCopyMode = '同じ特権を持った新規のユーザーを作る...';
$strChangeCopyModeCopy = '... 古いものを維持する';
$strChangeCopyModeDeleteAndReload = ' ... ユーザーテーブルから古いものを削除し、後で特権に再びロードする';
$strChangeCopyModeJustDelete = ' ... ユーザーテーブルから古いものを削除する';
$strChangeCopyModeRevoke = ' ... 古いものから有効な特権をすべて無効にし、それを後で削除する';
$strChangeCopyUser = 'ログイン情報変更 / ユーザーコピー';
$strChangeDisplay = '表示させるフィールドを選んで下さい';
$strChangePassword = 'パスワードの変更をする';
$strCharset = '文字セット';
$strCharsetOfFile = 'ファイルの文字セット:';
$strCharsets = '文字コード';
$strCharsetsAndCollations = '文字セットと照会順序';
$strCheckAll = '全てをマークする';
$strCheckOverhead = 'オーバーヘッドの検査をする';
$strCheckPrivs = '特権のチェックをする';
$strCheckPrivsLong = 'データベース &quot;%s&quot; の特権チェック。';
$strCheckTable = 'テーブルをチェックする';
$strChoosePage = '編集するページを選択してください。';
$strColComFeat = '列コメント表示機能';
$strCollation = '照会順序';
$strColumnNames = '列(カラム)名';
$strColumnPrivileges = 'カラム特定 特権';
$strCommand = 'コマンド';
$strComments = 'コメント';
$strCommentsForTable = 'COMMENTS FOR TABLE';
$strCompatibleHashing = 'MySQL&nbsp;4.0 互換';
$strCompleteInserts = '完全な INSERT 文を作成する';
$strCompression = '圧縮';
$strConfigFileError = 'phpMyAdmin がコンフィグレーションファイルを読み込むことができません! <br />文法エラーが起きたか、ファイルが見つかりません。<br />下のリンクからコンフィグレーションファイルを直接読み込んで、php のエラーメッセージを確認してください。 大抵の場合、区切り文字やセミコロンを忘れています。<br />もし空白のページが現れたら全てうまく行っています。';
$strConfigureTableCoord = '%s テーブルのカーディナリティを設定してください';
$strConnectionError = '接続できません: 無効な設定です。';
$strConnections = '接続';
$strConstraintsForDumped = 'ダンプ済みテーブルの制限';
$strConstraintsForTable = 'テーブルの制限';
$strCookiesRequired = 'ここから先はクッキーが許可されている必要があります。';
$strCopy = 'コピーする';
$strCopyDatabaseOK = 'データベース %s は %s にコピーされました。';
$strCopyTable = 'テーブルを(database<b>.</b>table)にコピーする:';
$strCopyTableOK = '%s テーブルを %s にコピーしました。';
$strCopyTableSameNames = '同じテーブルにコピーできません!';
$strCouldNotKill = 'phpMyAdminがスレッド%sを終了させることができませんでした。多分、既に終了しています。';
$strCreate = '作成';
$strCreateDatabaseBeforeCopying = 'コピーの前に CREATE DATABASE する';
$strCreateIndex = '&nbsp;%s&nbsp; の列のインデックスを作成する';
$strCreateIndexTopic = '新しいインデックスを作成する';
$strCreateNewDatabase = '新しい DB を作成します。';
$strCreateNewTable = '現在の DB に新しいテーブルを作成する %s --> ';
$strCreatePage = '新規ページを作成する';
$strCreatePdfFeat = 'PDF 作成機能';
$strCreationDates = '作成/更新/検査の日付を追加する';
$strCriteria = '絞込み基準';
$strCroatian = 'クロアチア語';
$strCyrillic = 'キリル文字ロシア語';
$strCzech = 'チェコ語';
$strCzechSlovak = 'チェコのスロバキア語';

$strDBComment = 'データベースコメント: ';
$strDBCopy = 'データベースをコピー コピー先:';
$strDBCopy = '下記へデータベースをコピー';
$strDBGContext = 'コンテキスト';
$strDBGContextID = 'コンテキストID';
$strDBGHits = 'ヒット';
$strDBGLine = '行';
$strDBGMaxTimeMs = '最大時間(ミリ秒)';
$strDBGMinTimeMs = '最小時間(ミリ秒)';
$strDBGModule = 'モジュール';
$strDBGTimePerHitMs = 'ヒット率(ミリ秒)';
$strDBGTotalTimeMs = '総計時間(ミリ秒)';
$strDBRename = '下記へデータベース名変更';
$strDanish = 'デンマーク語';
$strData = 'データ';
$strDataDict = 'データ辞書';
$strDataOnly = 'データのみ';
$strDataPages = 'データを含むページ数';
$strDatabase = 'データベース';
$strDatabaseEmpty = 'データベース名が空です!';
$strDatabaseExportOptions = 'データベースエクスポートオプション';
$strDatabaseHasBeenDropped = 'データベース %s を正常に削除しました。';
$strDatabaseNoTable = 'このデータベースはテーブルを含んでいません!';
$strDatabases = 'データベース';
$strDatabasesDropped = '%s データベースは削除されました。';
$strDatabasesStats = 'データベースの統計';
$strDatabasesStatsDisable = '統計を無効にする';
$strDatabasesStatsEnable = '統計を許可する';
$strDatabasesStatsHeavyTraffic = '注意: データベース統計を許可すると MySQL と WEBサーバーの間で重いトラフィックが発生するかもしれません。';
$strDbPrivileges = 'データベース特定 特権';
$strDbSpecific = 'データベース仕様';
$strDefault = '基本値';
$strDefaultEngine = '%s は、この MySQL サーバーのデフォルトストレージエンジンです。';
$strDefaultValueHelp = 'デフォルト値のために、バックスラッシュエスケープや引用符なしの 1 個だけの値を入れて下さい, このフォーマットは: a';
$strDefragment = 'テーブルのデフラグ';
$strDelOld = '現在のページは、もはや存在しないテーブルに参照があります。それらの参照を削除したいですか?';
$strDelayedInserts = '遅延インサートを使用する';
$strDelete = '削除';
$strDeleteAndFlush = 'ユーザーを削除して特権をリロードする';
$strDeleteAndFlushDescr = 'これはクリアーです。特権をリロードするので少々時間がかかります。';
$strDeleted = '選択した列を削除しました。';
$strDeletedRows = '削除された行数:';
$strDeleting = '%s を削除中です';
$strDescending = '降順';
$strDescription = '説明';
$strDictionary = '辞書';
$strDirtyPages = '不正なページ数';
$strDisableForeignChecks = '外部キーの検査を無効にする';
$strDisabled = '無効';
$strDisplayFeat = 'テーブル情報表示機能';
$strDisplayOrder = '表示順序:';
$strDisplayPDF = 'PDF スキーマの表示をする';
$strDoAQuery = '"例のQUERY"を実行 (ワイルドカード: "%")';
$strDoYouReally = '本当に実行しても良いですか？ --> ';
$strDocu = 'ヘルプ';
$strDrop = '削除';
$strDropSelectedDatabases = '選択されたデータベースの削除する';
$strDropUsersDb = 'ユーザーと同じ名前を持つデータベースを削除する';
$strDumpSaved = 'ダンプをファイル %s に保存しました。';
$strDumpXRows = '%s 列をダンプ。開始列は %s です。';
$strDumpingData = 'テーブルのダンプデータ';
$strDynamic = 'ダイナミック';

$strEdit = '修正';
$strEditPDFPages = 'PDF の編集 ページ';
$strEditPrivileges = '特権を修正';
$strEffective = '実効';
$strEmpty = '空にする';
$strEmptyResultSet = 'MySQLが空の値を返しました。(例えば行が空とか).';
$strEnabled = '有効';
$strEncloseInTransaction = 'トランザクションでエクスポートを囲む';
$strEncto = 'エンコーディングへ変換する'; // encoding convert
$strEnd = '最後';
$strEndCut = '切り取り終了';
$strEndRaw = 'RAW 終了';
$strEngineAvailable = '%s は、この MySQL サーバーで利用可能です。';
$strEngineDisabled = '%s は、この MySQL サーバーでは無効にされています。';
$strEngineUnsupported = 'この MySQL サーバーは %s ストレージエンジンをサポートしていません。';
$strEngines = 'エンジン';
$strEnglish = '英語';
$strEnglishPrivileges = ' 注意: MySQLの特権の名前は英語で表示しています。';
$strError = 'エラー';
$strEscapeWildcards = 'ワイルドカード「_」および「%」はそれらを文字通りに使用するために「\」でエスケープ(回避)するべきです。';
$strEscapeWildcards = 'ワイルドカード「_」と「%」は、それらを文字通りに使用するために「\」で回避する必要があります。';
$strEstonian = 'エストニア語';
$strExcelEdition = 'Excel の種類';
$strExcelOptions = 'Excel オプション';
$strExecuteBookmarked = 'ブックマークされた照会を実行する';
$strExplain = 'Explain SQL';
$strExport = 'エクスポート';
$strExtendedInserts = '長い INSERT 文を作成する';
$strExtra = '追加する';

$strFailedAttempts = '失敗しました';
$strField = 'フィールド';
$strFieldHasBeenDropped = 'フィールド %s が正常に削除されました';
$strFields = 'フィールド';
$strFieldsEmpty = ' フィールド数は空です。 ';
$strFieldsEnclosedBy = 'フィールド囲み記号';
$strFieldsEscapedBy = 'フィールドのエスケープ記号';
$strFieldsTerminatedBy = 'フィールド区切り記号';
$strFileAlreadyExists = 'ファイル %s は既にサーバーに存在しします。ファイル名を変更するか、上書きオプションを確認してください。';
$strFileCouldNotBeRead = 'ファイルを読めません。';
$strFileNameTemplate = 'ファイル名のテンプレート';
$strFileNameTemplateHelp = '__DB__ をデータベース名に、__TABLE__ をテーブル名に、そして%s任意の strftime 関数%s オプションを時間仕様に、拡張として自動的に追加されるでしょう。他のテキストも保存されるでしょう。';
$strFileNameTemplateRemember = 'テンプレートを覚える';
$strFixed = '固定';
$strFlushPrivilegesNote = '注意: phpMyAdmin は MySQL の特権テーブルから直接にユーザー特権を得ます。もしマニュアルで特権が変更されていると、このテーブルの内容とは異なるかもしれません。この場合、続けるまえに %s 特権リロード %s をする必要があります。';
$strFlushTable = 'テーブルのキャッシュを空にする("FLUSH")';
$strFormEmpty = 'フォームでは値がありませんでした。';
$strFormat = 'フォーマット';
$strFreePages = 'フリーなページ数';
$strFullText = '全文';
$strFunction = '関数';

$strGenBy = '生成された by';
$strGenTime = '作成の時間';
$strGeneralRelationFeat = 'リレーション機能';
$strGenerate = '生成する';
$strGeneratePassword = 'パスワードを生成する';
$strGeorgian = 'グルジア語';
$strGerman = 'ドイツ語';
$strGlobal = 'グローバル';
$strGlobalPrivileges = 'グローバル特権';
$strGlobalValue = 'グローバル値';
$strGo = '実行する';
$strGrantOption = '権限委譲';
$strGreek = 'ギリシア語';
$strGzip = '"gzip 方式"';

$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLExcelOptions = 'Microsoft Excel 2000 エクスポートオプション';
$strHTMLWord = 'Microsoft Word 2000';
$strHTMLWordOptions = 'Microsoft Word 2000 エクスポートオプション';
$strHasBeenAltered = 'を変更しました。';
$strHasBeenCreated = 'を作成しました。';
$strHaveToShow = '表示するために、少なくてもひとつのカラムを選択しなければなりません。';
$strHebrew = 'ヘブライ語';
$strHexForBinary = 'バイナリフィールドは 16 進数を使用する';
$strHome = 'メインページへ';
$strHomepageOfficial = 'phpMyAdmin ホーム';
$strHost = 'ホスト';
$strHostEmpty = 'ホスト名は空です!';
$strHungarian = 'ハンガリー語';

$strIcelandic = 'アイスランド語';
$strId = 'ID';
$strIdxFulltext = '全文';
$strIfYouWish = 'テーブルの列(カラム)にデータを追加する場合は、フィールド一覧をカンマで区切ってください。';
$strIgnore = '無視';
$strIgnoreInserts = '「INSERT IGNORE」を使用する';
$strIgnoringFile = 'ファイルを無視 %s';
$strImportDocSQL = 'docSQL ファイルインポート';
$strImportFiles = 'インポートファイル';
$strImportFinished = 'インポートが終了しました';
$strInUse = '使用中';
$strIndex = 'インデックス';
$strIndexHasBeenDropped = 'インデックス %s が削除されました';
$strIndexName = 'インデックス名&nbsp;:';
$strIndexType = 'インデックスの種類&nbsp;:';
$strIndexWarningMultiple = '1 個を越える INDEX キーがカラム `%s` 用に作成されました。';
$strIndexWarningPrimary = 'PRIMARY と INDEX のキーは両方とも、カラム `%s` に設定されるべきではありません。';
$strIndexWarningTable = 'テーブル `%s` のインデックスに関する問題';
$strIndexWarningTable = 'テーブル `%s` のインデックスに関する問題です。';
$strIndexWarningUnique = 'UNIQUE と INDEX のキーは両方とも、カラム `%s` に設定されるべきではありません。';
$strIndexes = 'インデックスサイズ';
$strInnoDBAutoextendIncrement = '自動拡張の追加増加量';
$strInnoDBAutoextendIncrementDesc = ' それがいっぱいになる場合に、自動拡張するテーブルスペースのサイズを拡張するための増分量です。';
$strInnoDBBufferPoolSize = 'バッファー蓄積サイズ';
$strInnoDBBufferPoolSizeDesc = 'InnoDB がキャッシュデータとそのテーブルのインデックスに使うバッファメモリのサイズです。';
$strInnoDBDataFilePath = 'データファイル';
$strInnoDBDataHomeDir = 'データホームディレクトリ';
$strInnoDBDataHomeDirDesc = 'すべての InnoDB データファイル用のディレクトリパスの共通部分です。';
$strInnoDBPages = 'ページ';
$strInnodbStat = 'InnoDB ステータス';
$strInsecureMySQL = 'あなたのコンフィグレーションファイルの設定が MySQL デフォルトの特権アカウントになっています (root ユーザーでパスワードなし) 。 MySQL サーバーもこのデフォルト設定で動作しているので、侵入者に対して無防備です。このセキュリティーホールは必ず閉ざしてください。';
$strInsert = '追加';
$strInsertAsNewRow = '新しい行として追加する';
$strInsertBookmarkTitle = 'ブックマークのタイトルを入力してください。';
$strInsertNewRow = '新しい行を追加する';
$strInsertTextfiles = 'テーブルにテキストファイルを追加する';
$strInsertedRowId = 'インサートした行 ID:';
$strInsertedRows = '追加された行数:';
$strInstructions = '実施例';
$strInternalNotNecessary = '* InnoDB が存在する場合、内部リレーションは必要ではありません。';
$strInternalRelations = '内部リレーション';

$strJapanese = '日本語';
$strJumpToDB = '&quot;%s&quot; データベースへジャンプ.';
$strJustDelete = '特権テーブルからユーザーを即削除する';
$strJustDeleteDescr = '&quot;削除済&quot; ユーザーは特権がリロードされるまでサーバーにアクセス可能です。';

$strKanjiEncodConvert = '漢字コード変換'; // kanji code convert
$strKeepPass = 'パスワードを変更しない';
$strKeyname = 'キー名';
$strKill = '停止';
$strKorean = '韓国語';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'LaTeX オプション';
$strLandscape = 'ランドスケープ';
$strLatexCaption = 'テーブルキャプション';
$strLatexContent = 'テーブル __TABLE__ の内容';
$strLatexContinued = '(続ける)';
$strLatexContinuedCaption = '継続時のテーブルキャプション';
$strLatexIncludeCaption = 'テーブルキャプションを含む';
$strLatexLabel = 'ラベルキー';
$strLatexStructure = 'テーブル __TABLE__ の構造';
$strLatvian = 'ラトビア語';
$strLengthSet = '長さ/セット*';
$strLimitNumRows = 'ページの最大レコード数';
$strLineFeed = '改行文字: \\n';
$strLinesTerminatedBy = '行の終端記号';
$strLinkNotFound = 'リンクが見つかりません';
$strLinksTo = 'リンク';
$strLithuanian = 'リトアニア語';
$strLoadExplanation = '最良の手段はデフォルトがチェックされています。しかし、それが失敗する場合、変更することができます。';
$strLoadMethod = 'LOAD 手段';
$strLocalhost = 'ローカル';
$strLocationTextfile = 'テキストファイルの場所';
$strLogPassword = 'パスワード:';
$strLogServer = 'サーバー';
$strLogUsername = 'ユーザー名:';
$strLogin = 'ログイン';
$strLoginInformation = 'ログイン情報';
$strLogout = 'ログアウト';
$strLongOperation = 'この操作は時間がかかります。それでも進みますか?';

$strMIMETypesForTable = 'MIME TYPES FOR TABLE';
$strMIME_MIMEtype = 'MIME タイプ';
$strMIME_available_mime = '有効な MIME タイプ';
$strMIME_available_transform = '変換有効';
$strMIME_description = '説明';
$strMIME_transformation = 'ブラウザー変換';
$strMIME_transformation_note = '利用可能な変換オプションの一覧、およびそれらの MIME 形式変換に関しては、%s変換の説明%s をクリックしてください。';
$strMIME_transformation_options = '変換オプション';
$strMIME_without = 'イタリック体で印刷されたMIME タイプは個別の変換関数を持っていません。';
$strMaximumSize = '最大サイズ: %s%s';
$strMbExtensionMissing = 'mbstring PHP 拡張は見つかりませんでした。また、マルチバイト文字セットを使用しているように見えます。phpMyAdmin は mbstring 拡張なしでは文字列を正確に分割することができず、また、予期しない結果が返ってくるかもしれません。';
$strMbOverloadWarning = 'PHP の設定で mbstring.func_overload が有効です。このオプションは phpMyAdmin と互換性がなく、あるデータの破壊を引き起こすかもしれません!';
$strModifications = 'を正しく修正しました。';
$strModify = '修正';
$strModifyIndexTopic = 'インデックスの変更';
$strMoreStatusVars = 'その他の変数の状態';
$strMoveTable = 'テーブルを(database<b>.</b>table)に移動:';
$strMoveTableOK = 'テーブル %s が %s 移動されました。';
$strMoveTableSameNames = '同じテーブルに移動できません!';
$strMultilingual = '多国語';
$strMustSelectFile = 'インサートしたいファイルを選択するべきです。';
$strMyISAMDataPointerSize = 'データポインターサイズ';
$strMyISAMMaxExtraSortFileSize = 'インデックス作成用一時ファイルの最大サイズ';
$strMyISAMMaxSortFileSize = '一時ソートファイルの最大サイズ';
$strMyISAMMaxSortFileSizeDesc = 'MyISAM インデックスの再作成で使用することが許された MySQL 一時ファイルの最大サイズです (REPAIR TABLE 中、ALTER TABLE か LOAD DATA INFILE)';
$strMyISAMRecoverOptions = '自動修復モード';
$strMyISAMRecoverOptionsDesc = 'クラッシュした MyISAM テーブルの自動回復用モードで、サーバー起動オプション --myisam-recover で設定します。';
$strMyISAMRepairThreads = 'リペアスレッド';
$strMyISAMRepairThreadsDesc = 'もしこの値が 1 以上なら、MyISAM テーブルのインデックスはソート処理の修復中に平行で(それ自身の各インデックスを)作成します。';
$strMyISAMSortBufferSize = 'ソートバッファーサイズ';
$strMyISAMSortBufferSizeDesc = 'このバッファーは、REPAIR TABLE の間に MyISAM インデックスをソートする場合、または CREATE INDEX か ALTER TABLE とインデックスを作成する場合に、割り付けられます。';
$strMySQLCharset = 'MySQLの文字セット';
$strMySQLConnectionCollation = 'MySQL 接続照会順序';
$strMySQLReloaded = 'MySQLを新しく読み込みました。';
$strMySQLSaid = 'MySQLのメッセージ --> ';
$strMySQLServerProcess = 'MySQL %pma_s1% は %pma_s2% 上 %pma_s3% として実行しています。';
$strMySQLShowProcess = 'MySQLプロセスの表示';
$strMySQLShowStatus = 'MySQLのランタイム情報';
$strMySQLShowVars = 'MySQLのシステム変数';

$strName = '名前';
$strNeedPrimaryKey = 'このテーブルはプライマリキーを定義すべきです';
$strNext = '次へ';
$strNo = 'いいえ';
$strNoActivity = '%s 秒以上操作をしていません。再度ログインをしてください。';
$strNoDatabases = 'データベース数';
$strNoDatabasesSelected = 'データベースが選択されていません。';
$strNoDescription = '記述がありません';
$strNoDetailsForEngine = 'このストレージエンジンには有効なステータスの詳細情報はありません。';
$strNoDropDatabases = '"DROP DATABASE"ステートメントは禁止される';
$strNoExplain = 'Explain SQL をスキップ';
$strNoFrames = 'phpMyAdmin は<b>フレーム</b>をサポートしたブラウザでの利用をお勧めします。';
$strNoIndex = 'インデックスは設定されていません。';
$strNoIndexPartsDefined = 'インデックスの部分は設定されていません。';
$strNoModification = '変更無し';
$strNoOptions = 'この書式はオプションがありません。';
$strNoPassword = 'パスワード無し';
$strNoPermission = 'ファイル %s を保存するパーミッションをウェブサーバーは持っていません。';
$strNoPhp = 'PHP コード無し';
$strNoPrivileges = '特権無し';
$strNoQuery = 'SQL 照会無し';
$strNoRights = '現在特権を持ってないのでここに入れません。';
$strNoRowsSelected = '行は選択されませんでした。';
$strNoSpace = 'ファイル %s を保存するには空き容量が不十分です。';
$strNoTablesFound = '現在の DB にテーブルはありません。';
$strNoThemeSupport = 'テーマをサポートしていません。設定とテーマディレクトリ %s を確認してください。';
$strNoUsersFound = '該当ユーザーは見つかりませんでした。';
$strNoValidateSQL = 'SQL 検証をスキップ';
$strNone = '無し';
$strNotNumber = 'これは数値ではありません。';
$strNotOK = 'OK ではありません。';
$strNotSet = '<b>%s</b> テーブルが見つからないか、%s がありません。';
$strNotValidNumber = ' は行の正しい番号ではありません ';
$strNull = '空の値(NULL)';
$strNumSearchResultsInTable = '%s 件が <i>%s</i> テーブルで見つかりました。';
$strNumSearchResultsTotal = '<b>件数:</b> <i>%s</i> が見つかりました。';
$strNumTables = 'テーブル';

$strOK = 'OK';
$strOftenQuotation = '引用符号です。オプションは、char または varchar フィールドのみ" "で囲まれていることを意味します。';
$strOperations = '操作';
$strOperator = '操作';
$strOptimizeTable = 'テーブルを最適化する';
$strOptionalControls = '特殊文字の読み込み/書き込みオプション';
$strOptionally = 'オプション';
$strOr = 'または';
$strOverhead = 'オーバーヘッド';
$strOverwriteExisting = 'ファイルが存在する場合は上書き';

$strPHP40203 = 'あなたはマルチバイト文字(mbstring)の扱いに重大なバグのある PHP 4.2.3 を使っています。PHP のバグレポート 19404 です。phpMyAdmin を使うなら、このバージョンの PHP はお奨めしません...と言うか patch をあてないと動きません。';
$strPHPVersion = 'PHP バージョン';
$strPageNumber = 'ページ番号:';
$strPagesToBeFlushed = 'フラッシュされたページ数';
$strPaperSize = '紙サイズ';
$strPartialText = '部分的な文書';
$strPassword = 'パスワード';
$strPasswordChanged = 'パスワードは %s 変更されました。';
$strPasswordEmpty = 'パスワードが空です。';
$strPasswordHashing = 'パスワードハッシュ';
$strPasswordNotSame = 'パスワードが同じではありません。';
$strPdfDbSchema = '"%s" データベース - %s 頁の図';
$strPdfInvalidTblName = '"%s" テーブルがありません!';
$strPdfNoTables = 'テーブルがありません';
$strPerHour = '時毎';
$strPerMinute = '/分';
$strPerSecond = '/秒';
$strPersian = 'ペルシア語';
$strPhoneBook = '電話帳';
$strPhp = 'PHP コードの作成';
$strPmaDocumentation = 'phpMyAdmin のドキュメント';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> を必ず config ファイルの中で設定してください!';
$strPolish = 'ポーランド語';
$strPortrait = 'ポートレイト';
$strPos1 = '最初';
$strPrevious = '以前';
$strPrimary = '主要';
$strPrimaryKeyHasBeenDropped = '主キーを削除しました。';
$strPrimaryKeyName = '主キーの名前は... PRIMARY ではなければいけません。';
$strPrimaryKeyWarning = '("PRIMARY"はちょうど主キーの名前ではなければいけません。';
$strPrint = '印刷';
$strPrintView = '印刷用の表示';
$strPrintViewFull = '印刷ビュー (全テキストを含む)';
$strPrivDescAllPrivileges = 'GRANT を除く全ての特権を含みます。';
$strPrivDescAlter = '存在するテーブル構造の変更を許可します。';
$strPrivDescAlterDb = 'データベースのデフォルト文字コードおよび照合を変更することと同様に既存のテーブルの構造を変更することを許可にします。';
$strPrivDescAlterRoutine = 'ストアドルーチンの変更と破棄を許可します。';
$strPrivDescCreateDb = '新しいデータベース、テーブルの作成を許可します。';
$strPrivDescCreateRoutine = 'ストアドルーチンの作成を許可します。';
$strPrivDescCreateTbl = '新しいテーブルの作成を許可します。';
$strPrivDescCreateTmpTable = 'テンポラリーテーブルの作成を許可します。';
$strPrivDescCreateUser = 'ユーザーアカウントの作成・破棄・名称変更を許可します。';
$strPrivDescCreateView = '新しいビューの作成を許可します。';
$strPrivDescDelete = 'データの削除を許可します。';
$strPrivDescDropDb = 'データベースとテーブルの削除を許可します。';
$strPrivDescDropTbl = 'テーブルの削除を許可します。';
$strPrivDescExecute = 'ストアードプロシジャーが走るのを許可します; このMySQL版では意味ありません。';
$strPrivDescExecute5 = 'ストアドルーチンの実行を許可します。';
$strPrivDescFile = 'データのインポート、データのファイルへのエクスポートを許可します。';
$strPrivDescGrant = '特権テーブルのリロードなしにユーザー、特権の追加を許可します。';
$strPrivDescIndex = 'インデックスの作成、削除を許可します。';
$strPrivDescInsert = 'データの挿入、入れ替えを許可します。';
$strPrivDescLockTables = '現在のスレッドのロッキングテーブルを許可します。';
$strPrivDescMaxConnections = '1 時間内に新しく接続可能な数を制限します。';
$strPrivDescMaxQuestions = '1 時間内にサーバーに照会を送れる数を制限します。';
$strPrivDescMaxUpdates = '1 時間内にテーブル、データベースに対しての変更が発生するコマンドの数を制限します。';
$strPrivDescProcess3 = '他のユーザープロセスを停止できることを許可します。';
$strPrivDescProcess4 = 'プロセスリスト中の完全な照会の表示を許可します。';
$strPrivDescReferences = 'この MySQL バージョンでは意味ありません。';
$strPrivDescReload = 'サーバーのリロード、キャッシュのクリアを許可します。';
$strPrivDescReplClient = 'スレーブかマスターを要求できる権利をユーザーに与えます。';
$strPrivDescReplSlave = 'レプリケーションスレーブが必要です。';
$strPrivDescSelect = 'データの読み出し許可';
$strPrivDescShowDb = 'データベースの完全なリストへのアクセス件を与えます。';
$strPrivDescShowView = '照会 SHOW CREATE VIEW の実行を許可します。';
$strPrivDescShutdown = 'サーバーのシャットダウンを許可します。';
$strPrivDescSuper = '最大の接続数に達しても接続を許可します。多くの管理操作はグローバル変数や他ユーザープロセスの終了ができるような設定が必要です。';
$strPrivDescUpdate = 'データの修正を許可します。';
$strPrivDescUsage = '特権がありません。';
$strPrivileges = '特権';
$strPrivilegesReloaded = '特権はリロードされました。';
$strProcesslist = 'プロセスリスト';
$strPutColNames = '最初の 1 行目にフィールド名を追加する';

$strQBE = '照会';
$strQBEDel = '削除';
$strQBEIns = '挿入';
$strQueryFrame = '照会ウィンドウ';
$strQueryOnDb = 'データベースの SQL 照会 <b>%s</b>:';
$strQuerySQLHistory = 'SQL 履歴';
$strQueryStatistics = '<b>照会統計</b>: 起動から %s 照会がサーバーに送られています。';
$strQueryTime = '照会の実行時間 %01.4f 秒';
$strQueryType = '照会タイプ';
$strQueryWindowLock = 'ウィンドウの外からこの照会を書き換えできません。';

$strReType = '再記入';
$strReadRequests = '読み込みリクエスト数';
$strReceived = '受信済';
$strRecords = 'レコード数';
$strReferentialIntegrity = '結合項目のチェック:';
$strRefresh = '再描画';
$strRelationNotWorking = 'phpMyAdmin の独自機能であるリレーション機能を処理するためのリンクテーブルが有効になっていません。これを解決するには %sここ%s をクリックして原因を見つけてください。';
$strRelationView = 'リレーションを表示する';
$strRelationalSchema = 'リレーショナルスキーマ';
$strRelations = 'リレーション';
$strRelationsForTable = 'RELATIONS FOR TABLE';
$strReloadFailed = 'MySQL のリロードに失敗しました。';
$strReloadMySQL = 'MySQL のリロード';
$strReloadingThePrivileges = '特権をリロード中です。';
$strRemoveSelectedUsers = '選択されたユーザーを削除します';
$strRenameDatabaseOK = 'データベース %s は %s に名称変更しました。';
$strRenameTable = 'テーブル名の変更';
$strRenameTableOK = '%s を %s に名前を変更しました。';
$strRepairTable = 'テーブルを復旧する';
$strReplace = '置き換える';
$strReplaceNULLBy = 'NULL を指定の文字列で置き換える';
$strReplaceTable = 'ファイルでテーブルを置き換える';
$strReset = 'リセット';
$strResourceLimits = 'リソースの制限';
$strRevoke = '廃止';
$strRevokeAndDelete = 'ユーザーから有効な特権を全て破棄して削除する';
$strRevokeAndDeleteDescr = 'ユーザーは特権リロードするまで USAGE 特権のままです。';
$strRevokeMessage = '%s の特権を取消しました。';
$strRomanian = 'ルーマニア語';
$strRoutines = 'ルーチン';
$strRowLength = '行の長さ';
$strRowSize = ' 行のサイズ ';
$strRows = '行';
$strRowsFrom = '開始行';
$strRowsModeFlippedHorizontal = '水平 (回転したヘッダー)';
$strRowsModeHorizontal = '水平';
$strRowsModeOptions = '方向: %s : %s 列ずつヘッダーを繰り返し表示する';
$strRowsModeVertical = '垂直';
$strRowsStatistic = '行の統計';
$strRunQuery = '照会の実行する';
$strRunSQLQuery = 'データベース %s にSQL 照会を実行する';
$strRunning = 'が実行中です。 %s';
$strRussian = 'ロシア語';

$strSQL = 'SQL';
$strSQLExportCompatibility = 'SQL エクスポート互換';
$strSQLExportType = 'エクスポート形式';
$strSQLOptions = 'SQL オプション';
$strSQLParserBugMessage = 'あなたは SQL パーサーのバグを見けられるかもしれません。あなたの問い合わせを念入りに確かめて、引用符が正しくミスマッチがないかチェックしましょう。その他の失敗にはテキストエリアで引用した外側にバイナリーコードが付いてファイルがアップロードされてしまったような原因が考えられます。また、あなたの問い合わせを MySQL のコマンドラインを使って試すこともできます。MySQL サーバーは以下のようにエラーを出します。そこには問題を解決する手助けがあるでしょう。コマンドラインでは成功しても、まだ問題がある場合、パーサーが失敗する場合には、問題のある SQL 問い合わせをひとつの文に減らしてみて下さい。そして以下のセクションでデータを切り取ってバグ報告を送って下さい:';
$strSQLParserUserError = 'あなたの SQL 照会にエラーがあります。MySQL サーバーは以下のようにエラーを出します。そこには問題を解決する手助けがあるでしょう。';
$strSQLQuery = '実行した SQL 照会';
$strSQLResult = 'SQL の結果';
$strSQPBugInvalidIdentifer = '認証が無効です。';
$strSQPBugUnclosedQuote = '引用符が閉じていません。';
$strSQPBugUnknownPunctuation = '無効な句読点文字です。';
$strSave = '保存する';
$strSaveOnServer = 'サーバーの %s ディレクトリに保存する';
$strScaleFactorSmall = '1 ページ内に図表を配置させるためには大きさが小さ過ぎます';
$strSearch = '検索';
$strSearchFormTitle = 'データベース内を検索する';
$strSearchInTables = 'テーブルの指定:';
$strSearchNeedle = '検索する単語、または値 (ワイルドカードは: "%"):';
$strSearchOption1 = 'いずれかの単語を含む';
$strSearchOption2 = '全ての単語を含む';
$strSearchOption3 = '正確なフレーズ';
$strSearchOption4 = '正規表現';
$strSearchResultsFor = '検索結果 "<i>%s</i>" %s:';
$strSearchType = '検索条件:';
$strSecretRequired = '設定ファイルは今は秘密パスフレーズを必要とします(blowfish_secret)。';
$strSelectADb = 'データベースを選択してください。';
$strSelectAll = '全選択';
$strSelectBinaryLog = '選択したバイナリログを閲覧';
$strSelectBinaryLog = '選択したバイナリログを閲覧する';
$strSelectFields = 'フィールドの選択(1 つ以上):';
$strSelectNumRows = '照会';
$strSelectTables = 'テーブルの選択';
$strSend = 'ファイルで保存する';
$strSent = '送信';
$strServer = 'サーバー';
$strServerChoice = 'サーバーの選択をする';
$strServerNotResponding = 'サーバーが反応しません。';
$strServerStatus = 'ランタイム情報';
$strServerStatusUptime = 'このMySQLサーバーは %s 間動作中で、%s に起動しています。';
$strServerTabProcesslist = 'プロセス';
$strServerTabVariables = '変数';
$strServerTrafficNotes = '<b>サーバートラフィック</b>: このテーブルは MySQL サーバーが起動してからのネットワークトラフィックの統計を表示します。';
$strServerVars = 'サーバー変数と設定値';
$strServerVersion = 'サーバーのバージョン';
$strSessionValue = 'セッション値';
$strSetEnumVal = 'フィールドタイプが"enum"又は"set"の場合は値をこのフォーマットを使って入力してください: \'a\',\'b\',\'c\'...<br />バックスラッシュ「"\"」又はクオート「"\'"」を入力したいと、頭にバックスラッシュを付けて下さい「例: \'\\\\xyz\' or \'a\\\'b\'」。';
$strShow = '表示';
$strShowAll = '全て表示';
$strShowColor = '色表示';
$strShowDatadictAs = 'データ辞書フォーマット';
$strShowFullQueries = 'フル照会を表示';
$strShowGrid = 'グリッドの表示';
$strShowPHPInfo = 'PHP 情報';
$strShowTableDimension = 'テーブルの大きさを表示する';
$strShowTables = 'テーブルの表示する';
$strShowThisQuery = ' 実行した照会をここに表示する';
$strShowingRecords = 'レコードを表示する';
$strSimplifiedChinese = '簡体字中国語';
$strSingly = '(1 回)';
$strSize = 'サイズ';
$strSlovak = 'スロバキア語';
$strSlovenian = 'スロベニア語';
$strSocketProblem = '(または、ローカルの MySQL サーバーのソケットは正確に設定されません)';
$strSort = 'ソート';
$strSortByKey = 'キーでソート';
$strSpaceUsage = 'ディスク使用量';
$strSpanish = 'スペイン語';
$strSplitWordsWithSpace = '各単語はスペース文字(" ")で区切って下さい。';
$strStatCheckTime = '最終検査';
$strStatCreateTime = '作成日時';
$strStatUpdateTime = '最終更新';
$strStatement = 'ステートメント';
$strStatus = '状態';
$strStorageEngine = 'ストレージエンジン';
$strStorageEngines = 'ストレージエンジン';
$strStrucCSV = 'CSV データ';
$strStrucData = '構造とデータ';
$strStrucDrop = '「DROP TABLE」を追加する';
$strStrucExcelCSV = 'MS Excel 用 CSV データ';
$strStrucNativeExcel = '本来の MS Excel データ';
$strStrucOnly = '構造のみ';
$strStructPropose = 'テーブル構造の確認する';
$strStructure = '構造';
$strSubmit = '実行する';
$strSuccess = 'SQL 照会が正常に実行されました';
$strSum = '合計';
$strSwedish = 'スウェーデン語';
$strSwitchToDatabase = 'コピーしたデータベースに切り替え';
$strSwitchToTable = 'コピーしたテーブルに切り替え';

$strTable = 'テーブル ';
$strTableComments = 'テーブルの説明';
$strTableEmpty = 'テーブル名は空です。';
$strTableHasBeenDropped = 'テーブル %s を削除しました。';
$strTableHasBeenEmptied = 'テーブル %s を空にしました。';
$strTableHasBeenFlushed = 'テーブル %s のキャッシュを空にしました。';
$strTableMaintenance = 'テーブル管理';
$strTableOfContents = 'テーブルの内容';
$strTableOptions = 'テーブルオプション';
$strTableStructure = 'テーブルの構造';
$strTableType = 'テーブルのタイプ';
$strTables = '%sテーブル';
$strTakeIt = 'それにします';
$strTblPrivileges = 'テーブル特定 特権';
$strTextAreaLength = ' 長さの所為でこのフィールドを<br /> 修正できない可能性があります。';
$strThai = 'タイ語';
$strTheContent = 'ファイルのデータを挿入しました。';
$strTheContents = 'ファイルのデータで、選択したテーブルの主要キーまたは唯一なキーに一致する列を置き換えます。';
$strTheTerminator = 'フィールドの終端記号です。';
$strTheme = 'テーマ / スタイル';
$strThisHost = 'このホスト';
$strThisNotDirectory = 'これはディレクトリではありません';
$strThreadSuccessfullyKilled = 'スレッド %s は終了しました。';
$strTime = '時間';
$strToggleScratchboard = 'トグルスクラッチボード';
$strTotal = '合計';
$strTotalUC = '合計';
$strTraditionalChinese = '伝統的な中国語';
$strTraditionalSpanish = '伝統的なスペイン語';
$strTraffic = 'トラフィック';
$strTransformation_application_octetstream__download = 'フィールドのバイナリデータをダウンロードするリンクを表示します。ひとつめのオプションはバイナリファイルのファイル名です。ふたつめのオプションはファイル名を含むテーブル行の正しいフィールド名です。ふたつめのオプションを提供する場合、ひとつめのオプションは空文字列に設定する必要があります。';
$strTransformation_image_jpeg__inline = 'クリック可能なサムネイルを表示します; オプション: width・height をピクセルで指定 (元の比率を保ちます)';
$strTransformation_image_jpeg__link = 'この画像へのリンクを表示 (例えば blob を直接ダウンロード).';
$strTransformation_image_png__inline = '「image/jpeg: inline」を参照してください。';
$strTransformation_text_plain__dateformat = 'TIME、TIMESTAMPあるいはDATETIMEフィールドで、ローカルの日付表示形式を用いて書式化します。1 つ目のオプションはタイムスタンプに加算するオフセット時間(単位:時間)です(デフォルト: 0)2 つ目のオプションは、PHP の strftime()で利用可能なパラメーターでのさまざまな日付表示形式です。';
$strTransformation_text_plain__external = 'LINUX のみ: 外部アプリケーションを起動し、標準入力からフィールドデータを入力します。アプリケーションの標準出力が返ります。デフォルトは Tidy で、綺麗な HTML コードを出力します。セキュリティの理由で、手動でファイル「libraries/text_plain__external.inc.php」を編集し、実行するを許可するツールを挿入しなければなりません。最初のオプションは、使用するプログラムの数で、2 つ目のオプションはプログラムのパラメータです。3 つ目のオプションが 1 に設定されていた場合、htmlspecialchars() を用いて出力を変換するでしょう(デフォルト: 1)4 つ目 オプションが 1 に設定されていた場合、禁則処理を防ぎ、出力がすべて 1 行に見えることを保証するでしょう(デフォルト: 1).';
$strTransformation_text_plain__formatted = 'フィールドの元の書式を保存します。エスケープせずに終了します。';
$strTransformation_text_plain__imagelink = '画像とリンク、ファイル名を含むフィールドを表示します; ひとつめのオプションは "http://domain.com/" のような接頭語で、ふたつめのオプションはピクセル指定の幅、みっつめは高さです。';
$strTransformation_text_plain__link = 'ファイル名を含むフィールド、リンクを表示; ひとつ目のオプションは "http://domain.com/" のような接頭語、二つ目のオプションはリンクのタイトルです。';
$strTransformation_text_plain__substr = '文字列の一部のみ表示します。1 つ目のオプションはテキストの出力がどこで開始するかオフセットを定義します (デフォルトは「0」です)二つ目のオプションはどれだけのテキストを返すかのオフセットです。空の場合、残りのテキストをすべて返します。三つ目のオプションは、文字列の一部が返される時、どの文字を出力に追加するか定義します。 (デフォルトは「...」です)';
$strTruncateQueries = '照会の表示を切り詰める';
$strTurkish = 'トルコ語';
$strType = 'フィールドタイプ';

$strUkrainian = 'ウクライナ語';
$strUncheckAll = '全てのマークを削除する';
$strUnicode = 'ユニコード';
$strUnique = '一意性';
$strUnknown = '不明';
$strUnselectAll = '全解放';
$strUpdComTab = 'Column_comments テーブルのアップグレード方法のドキュメントを参照してください。';
$strUpdatePrivMessage = '%s の特権を更新しました。';
$strUpdateProfileMessage = 'プロファイルを更新しました。';
$strUpdateQuery = '照会の更新';
$strUpgrade = '%s %s かそれ移行にアップグレードするべきです。';
$strUsage = '使用量';
$strUseBackquotes = '逆クオートでテーブル名やフィールド名を囲む';
$strUseHostTable = 'ホストテーブルを使う';
$strUseTabKey = '値から値まで移るには TAB キーを、もしくはいろんな場所でも移動するには CTRL + カーソルを使用します。';
$strUseTables = '使うテーブル';
$strUseTextField = 'テキストフィールドを使用';
$strUseThisValue = 'この値を使用';
$strUser = 'ユーザー';
$strUserAlreadyExists = 'ユーザー %s は既に存在します!';
$strUserEmpty = 'ユーザー名は空です。';
$strUserName = 'ユーザー名';
$strUserNotFound = '選択されたユーザーは特権テーブルに見つかりませんでした。';
$strUserOverview = 'ユーザー概略';
$strUsersDeleted = '選択されたユーザーは削除されました。';
$strUsersHavingAccessToDb = 'ユーザーは &quot;%s&quot; へのアクセス権限を所持しています。';

$strValidateSQL = 'SQL の検証';
$strValidatorError = 'SQL の検証機能を初期化できません。%sdocumentation%s に記述されているように PHP 拡張ライブラリがインストールされているかチェックしてください。';
$strValue = '値';
$strVar = '変数';
$strVersionInformation = 'バージョン情報';
$strView = 'ビュー';
$strViewDump = 'テーブルのダンプ(スキーマ)表示';
$strViewDumpDB = 'DB のダンプ(スキーマ)表示';
$strViewDumpDatabases = 'データベースのダンプビュー (スキーマ)';
$strViewHasBeenDropped = 'ビュー %s を破棄しました。';

$strWebServerUploadDirectory = 'ウェブサーバー上でアップロードする';
$strWebServerUploadDirectoryError = 'アップロードを行うディレクトリがありません。';
$strWelcome = '%s へようこそ';
$strWestEuropean = '西ヨーロッパ語';
$strWildcard = 'ワイルドカード';
$strWindowNotFound = 'ターゲットブラウザウィンドウを更新することができません。恐らく親ウィンドウを閉じたか、あるいはブラウザーのセキュリティ設定で、クロスウィンドウの更新をブロックしています。';
$strWithChecked = 'チェックしたものを:';
$strWriteRequests = '書き込みリクエスト数';
$strWritingCommentNotPossible = 'コメントの書き込みが有効ではありません。';
$strWritingRelationNotPossible = 'リレーションの書き込みが有効ではありません。';
$strWrongUser = 'ユーザー名またはパスワードが正しくありません。<br />アクセスは拒否されました。';

$strXML = 'XML';
$strXkana = '全角カナへ変換する'; // convert to X208-kana

$strYes = 'はい';

$strZeroRemovesTheLimit = '注意: オプションを 0 (ゼロ)に設定すると制限がなくなります。';
$strZip = '"zip 方式"';

// To translate:

$strBufferPoolActivity = 'Buffer Pool Activity';  //to translate

$strDropDatabaseStrongWarning = 'You are about to DESTROY a complete database!';  //to translate

$strLatchedPages = 'Latched pages';  //to translate

$strMIME_nodescription = 'この変換には有効な説明がありません。<br />Please ask the author, what %s does.';//to translate
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';//to translate
$strMyISAMDataPointerSizeDesc = 'CREATE TABLE で MyISAMテーブルに使用すう MAX_ROWS オプションが指定されない場合のバイト指定のデフォルトポインターサイズです。';  //to translate
$strMyISAMMaxExtraSortFileSizeDesc = 'If the temporary file used for fast MyISAM index creation would be larger than using the key cache by the amount specified here, prefer the key cache method.';  //to translate

$strTransformation_application_octetstream__hex = 'Displays hexadecimal representation of data.';  //to translate

?>
