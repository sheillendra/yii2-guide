<h1>Yii PHP Framework Version 2 <span id="yii-php-framework-version-2"></span><a href="#yii-php-framework-version-2" class="hashlink">¶</a></h1><p>This is the core framework code of <a href="https://github.com/yiisoft/yii2#readme">Yii 2</a>.</p>
<p>This repository is a read-only git subsplit of <a href="https://github.com/yiisoft/yii2">https://github.com/yiisoft/yii2</a>.
    Please submit issue reports and pull requests to the main repository.
    For license information check the <a href="LICENSE.md">LICENSE</a>-file.</p>
<h2>Installation <span id="installation"></span><a href="#installation" class="hashlink">¶</a></h2><p>The preferred way to install the Yii framework is through <a href="http://getcomposer.org/download/">composer</a>.</p>
<p>Either run</p>
<pre><code class="hljs php">composer <span class="hljs-keyword">global</span> <span class="hljs-keyword">require</span> <span class="hljs-string">"fxp/composer-asset-plugin:^1.3.1"</span>
composer <span class="hljs-keyword">require</span> yiisoft/yii2
</code></pre>
<p>or add</p>
<pre><code class="hljs json language-json"><span class="hljs-string">"yiisoft/yii2"</span>: <span class="hljs-string">"~2.0.0"</span>,
</code></pre>
<p>to the require section of your composer.json.</p>
<h1>Class Reference</h1>

<table class="summaryTable docIndex table table-bordered table-striped table-hover">
    <colgroup>
        <col class="col-package">
        <col class="col-class">
        <col class="col-description">
    </colgroup>
    <tbody><tr>
            <th>Class</th>
            <th>Description</th>
        </tr>
        <tr>
            <td><a href="yii.html">Yii</a></td>
            <td>Yii is a helper class serving common framework functionalities.</td>
        </tr>
        <tr>
            <td><a href="yiirequirementchecker.html">YiiRequirementChecker</a></td>
            <td>YiiRequirementChecker allows checking, if current system meets the requirements for running the Yii application.</td>
        </tr>
        <tr>
            <td><a href="yii-baseyii.html">yii\BaseYii</a></td>
            <td>BaseYii is the core helper class for the Yii framework.</td>
        </tr>
        <tr>
            <td><a href="yii-base-action.html">yii\base\Action</a></td>
            <td>Action is the base class for all controller action classes.</td>
        </tr>
        <tr>
            <td><a href="yii-base-actionevent.html">yii\base\ActionEvent</a></td>
            <td>ActionEvent represents the event parameter used for an action event.</td>
        </tr>
        <tr>
            <td><a href="yii-base-actionfilter.html">yii\base\ActionFilter</a></td>
            <td>ActionFilter is the base class for action filters.</td>
        </tr>
        <tr>
            <td><a href="yii-base-application.html">yii\base\Application</a></td>
            <td>Application is the base class for all application classes.</td>
        </tr>
        <tr>
            <td><a href="yii-base-arrayaccesstrait.html">yii\base\ArrayAccessTrait</a></td>
            <td>ArrayAccessTrait provides the implementation for <a href="http://www.php.net/class.iteratoraggregate">IteratorAggregate</a>, <a href="http://www.php.net/class.arrayaccess">ArrayAccess</a> and <a href="http://www.php.net/class.countable">Countable</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-base-arrayable.html">yii\base\Arrayable</a></td>
            <td>Arrayable is the interface that should be implemented by classes who want to support customizable representation of their instances.</td>
        </tr>
        <tr>
            <td><a href="yii-base-arrayabletrait.html">yii\base\ArrayableTrait</a></td>
            <td>ArrayableTrait provides a common implementation of the <a href="yii-base-arrayable.html">yii\base\Arrayable</a> interface.</td>
        </tr>
        <tr>
            <td><a href="yii-base-behavior.html">yii\base\Behavior</a></td>
            <td>Behavior is the base class for all behavior classes.</td>
        </tr>
        <tr>
            <td><a href="yii-base-bootstrapinterface.html">yii\base\BootstrapInterface</a></td>
            <td>BootstrapInterface is the interface that should be implemented by classes who want to participate in the application bootstrap process.</td>
        </tr>
        <tr>
            <td><a href="yii-base-component.html">yii\base\Component</a></td>
            <td>Component is the base class that implements the <em>property</em>, <em>event</em> and <em>behavior</em> features.</td>
        </tr>
        <tr>
            <td><a href="yii-base-configurable.html">yii\base\Configurable</a></td>
            <td>Configurable is the interface that should be implemented by classes who support configuring
                its properties through the last parameter to its constructor.</td>
        </tr>
        <tr>
            <td><a href="yii-base-controller.html">yii\base\Controller</a></td>
            <td>Controller is the base class for classes containing controller logic.</td>
        </tr>
        <tr>
            <td><a href="yii-base-dynamicmodel.html">yii\base\DynamicModel</a></td>
            <td>DynamicModel is a model class primarily used to support ad hoc data validation.</td>
        </tr>
        <tr>
            <td><a href="yii-base-errorexception.html">yii\base\ErrorException</a></td>
            <td>ErrorException represents a PHP error.</td>
        </tr>
        <tr>
            <td><a href="yii-base-errorhandler.html">yii\base\ErrorHandler</a></td>
            <td>ErrorHandler handles uncaught PHP errors and exceptions.</td>
        </tr>
        <tr>
            <td><a href="yii-base-event.html">yii\base\Event</a></td>
            <td>Event is the base class for all event classes.</td>
        </tr>
        <tr>
            <td><a href="yii-base-exception.html">yii\base\Exception</a></td>
            <td>Exception represents a generic exception for all purposes.</td>
        </tr>
        <tr>
            <td><a href="yii-base-exitexception.html">yii\base\ExitException</a></td>
            <td>ExitException represents a normal termination of an application.</td>
        </tr>
        <tr>
            <td><a href="yii-base-inlineaction.html">yii\base\InlineAction</a></td>
            <td>InlineAction represents an action that is defined as a controller method.</td>
        </tr>
        <tr>
            <td><a href="yii-base-invalidcallexception.html">yii\base\InvalidCallException</a></td>
            <td>InvalidCallException represents an exception caused by calling a method in a wrong way.</td>
        </tr>
        <tr>
            <td><a href="yii-base-invalidconfigexception.html">yii\base\InvalidConfigException</a></td>
            <td>InvalidConfigException represents an exception caused by incorrect object configuration.</td>
        </tr>
        <tr>
            <td><a href="yii-base-invalidparamexception.html">yii\base\InvalidParamException</a></td>
            <td>InvalidParamException represents an exception caused by invalid parameters passed to a method.</td>
        </tr>
        <tr>
            <td><a href="yii-base-invalidrouteexception.html">yii\base\InvalidRouteException</a></td>
            <td>InvalidRouteException represents an exception caused by an invalid route.</td>
        </tr>
        <tr>
            <td><a href="yii-base-invalidvalueexception.html">yii\base\InvalidValueException</a></td>
            <td>InvalidValueException represents an exception caused by a function returning a value of unexpected type.</td>
        </tr>
        <tr>
            <td><a href="yii-base-model.html">yii\base\Model</a></td>
            <td>Model is the base class for data models.</td>
        </tr>
        <tr>
            <td><a href="yii-base-modelevent.html">yii\base\ModelEvent</a></td>
            <td>ModelEvent represents the parameter needed by <a href="yii-base-model.html">yii\base\Model</a> events.</td>
        </tr>
        <tr>
            <td><a href="yii-base-module.html">yii\base\Module</a></td>
            <td>Module is the base class for module and application classes.</td>
        </tr>
        <tr>
            <td><a href="yii-base-notsupportedexception.html">yii\base\NotSupportedException</a></td>
            <td>NotSupportedException represents an exception caused by accessing features that are not supported.</td>
        </tr>
        <tr>
            <td><a href="yii-base-object.html">yii\base\Object</a></td>
            <td>Object is the base class that implements the <em>property</em> feature.</td>
        </tr>
        <tr>
            <td><a href="yii-base-request.html">yii\base\Request</a></td>
            <td>Request represents a request that is handled by an <a href="yii-base-application.html">yii\base\Application</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-base-response.html">yii\base\Response</a></td>
            <td>Response represents the response of an <a href="yii-base-application.html">yii\base\Application</a> to a <a href="yii-base-request.html">yii\base\Request</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-base-security.html">yii\base\Security</a></td>
            <td>Security provides a set of methods to handle common security-related tasks.</td>
        </tr>
        <tr>
            <td><a href="yii-base-theme.html">yii\base\Theme</a></td>
            <td>Theme represents an application theme.</td>
        </tr>
        <tr>
            <td><a href="yii-base-unknownclassexception.html">yii\base\UnknownClassException</a></td>
            <td>UnknownClassException represents an exception caused by using an unknown class.</td>
        </tr>
        <tr>
            <td><a href="yii-base-unknownmethodexception.html">yii\base\UnknownMethodException</a></td>
            <td>UnknownMethodException represents an exception caused by accessing an unknown object method.</td>
        </tr>
        <tr>
            <td><a href="yii-base-unknownpropertyexception.html">yii\base\UnknownPropertyException</a></td>
            <td>UnknownPropertyException represents an exception caused by accessing unknown object properties.</td>
        </tr>
        <tr>
            <td><a href="yii-base-userexception.html">yii\base\UserException</a></td>
            <td>UserException is the base class for exceptions that are meant to be shown to end users.</td>
        </tr>
        <tr>
            <td><a href="yii-base-view.html">yii\base\View</a></td>
            <td>View represents a view object in the MVC pattern.</td>
        </tr>
        <tr>
            <td><a href="yii-base-viewcontextinterface.html">yii\base\ViewContextInterface</a></td>
            <td>ViewContextInterface is the interface that should implemented by classes who want to support relative view names.</td>
        </tr>
        <tr>
            <td><a href="yii-base-viewevent.html">yii\base\ViewEvent</a></td>
            <td>ViewEvent represents events triggered by the <a href="yii-base-view.html">yii\base\View</a> component.</td>
        </tr>
        <tr>
            <td><a href="yii-base-viewnotfoundexception.html">yii\base\ViewNotFoundException</a></td>
            <td>ViewNotFoundException represents an exception caused by view file not found.</td>
        </tr>
        <tr>
            <td><a href="yii-base-viewrenderer.html">yii\base\ViewRenderer</a></td>
            <td>ViewRenderer is the base class for view renderer classes.</td>
        </tr>
        <tr>
            <td><a href="yii-base-widget.html">yii\base\Widget</a></td>
            <td>Widget is the base class for widgets.</td>
        </tr>
        <tr>
            <td><a href="yii-base-widgetevent.html">yii\base\WidgetEvent</a></td>
            <td>WidgetEvent represents the event parameter used for a widget event.</td>
        </tr>
        <tr>
            <td><a href="yii-behaviors-attributebehavior.html">yii\behaviors\AttributeBehavior</a></td>
            <td>AttributeBehavior automatically assigns a specified value to one or multiple attributes of an ActiveRecord
                object when certain events happen.</td>
        </tr>
        <tr>
            <td><a href="yii-behaviors-attributetypecastbehavior.html">yii\behaviors\AttributeTypecastBehavior</a></td>
            <td>AttributeTypecastBehavior provides an ability of automatic model attribute typecasting.</td>
        </tr>
        <tr>
            <td><a href="yii-behaviors-blameablebehavior.html">yii\behaviors\BlameableBehavior</a></td>
            <td>BlameableBehavior automatically fills the specified attributes with the current user ID.</td>
        </tr>
        <tr>
            <td><a href="yii-behaviors-sluggablebehavior.html">yii\behaviors\SluggableBehavior</a></td>
            <td>SluggableBehavior automatically fills the specified attribute with a value that can be used a slug in a URL.</td>
        </tr>
        <tr>
            <td><a href="yii-behaviors-timestampbehavior.html">yii\behaviors\TimestampBehavior</a></td>
            <td>TimestampBehavior automatically fills the specified attributes with the current timestamp.</td>
        </tr>
        <tr>
            <td><a href="yii-caching-apccache.html">yii\caching\ApcCache</a></td>
            <td>ApcCache provides APC caching in terms of an application component.</td>
        </tr>
        <tr>
            <td><a href="yii-caching-arraycache.html">yii\caching\ArrayCache</a></td>
            <td>ArrayCache provides caching for the current request only by storing the values in an array.</td>
        </tr>
        <tr>
            <td><a href="yii-caching-cache.html">yii\caching\Cache</a></td>
            <td>Cache is the base class for cache classes supporting different cache storage implementations.</td>
        </tr>
        <tr>
            <td><a href="yii-caching-chaineddependency.html">yii\caching\ChainedDependency</a></td>
            <td>ChainedDependency represents a dependency which is composed of a list of other dependencies.</td>
        </tr>
        <tr>
            <td><a href="yii-caching-dbcache.html">yii\caching\DbCache</a></td>
            <td>DbCache implements a cache application component by storing cached data in a database.</td>
        </tr>
        <tr>
            <td><a href="yii-caching-dbdependency.html">yii\caching\DbDependency</a></td>
            <td>DbDependency represents a dependency based on the query result of a SQL statement.</td>
        </tr>
        <tr>
            <td><a href="yii-caching-dbquerydependency.html">yii\caching\DbQueryDependency</a></td>
            <td>DbQueryDependency represents a dependency based on the query result of an <a href="yii-db-queryinterface.html">yii\db\QueryInterface</a> instance.</td>
        </tr>
        <tr>
            <td><a href="yii-caching-dependency.html">yii\caching\Dependency</a></td>
            <td>Dependency is the base class for cache dependency classes.</td>
        </tr>
        <tr>
            <td><a href="yii-caching-dummycache.html">yii\caching\DummyCache</a></td>
            <td>DummyCache is a placeholder cache component.</td>
        </tr>
        <tr>
            <td><a href="yii-caching-expressiondependency.html">yii\caching\ExpressionDependency</a></td>
            <td>ExpressionDependency represents a dependency based on the result of a PHP expression.</td>
        </tr>
        <tr>
            <td><a href="yii-caching-filecache.html">yii\caching\FileCache</a></td>
            <td>FileCache implements a cache component using files.</td>
        </tr>
        <tr>
            <td><a href="yii-caching-filedependency.html">yii\caching\FileDependency</a></td>
            <td>FileDependency represents a dependency based on a file's last modification time.</td>
        </tr>
        <tr>
            <td><a href="yii-caching-memcache.html">yii\caching\MemCache</a></td>
            <td>MemCache implements a cache application component based on <a href="http://pecl.php.net/package/memcache">memcache</a>
                and <a href="http://pecl.php.net/package/memcached">memcached</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-caching-memcacheserver.html">yii\caching\MemCacheServer</a></td>
            <td>MemCacheServer represents the configuration data for a single memcache or memcached server.</td>
        </tr>
        <tr>
            <td><a href="yii-caching-tagdependency.html">yii\caching\TagDependency</a></td>
            <td>TagDependency associates a cached data item with one or multiple <a href="yii-caching-tagdependency.html#$tags-detail">$tags</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-caching-wincache.html">yii\caching\WinCache</a></td>
            <td>WinCache provides Windows Cache caching in terms of an application component.</td>
        </tr>
        <tr>
            <td><a href="yii-caching-xcache.html">yii\caching\XCache</a></td>
            <td>XCache provides XCache caching in terms of an application component.</td>
        </tr>
        <tr>
            <td><a href="yii-caching-zenddatacache.html">yii\caching\ZendDataCache</a></td>
            <td>ZendDataCache provides Zend data caching in terms of an application component.</td>
        </tr>
        <tr>
            <td><a href="yii-captcha-captcha.html">yii\captcha\Captcha</a></td>
            <td>Captcha renders a CAPTCHA image and an input field that takes user-entered verification code.</td>
        </tr>
        <tr>
            <td><a href="yii-captcha-captchaaction.html">yii\captcha\CaptchaAction</a></td>
            <td>CaptchaAction renders a CAPTCHA image.</td>
        </tr>
        <tr>
            <td><a href="yii-captcha-captchaasset.html">yii\captcha\CaptchaAsset</a></td>
            <td>This asset bundle provides the javascript files needed for the <a href="yii-captcha-captcha.html">yii\captcha\Captcha</a> widget.</td>
        </tr>
        <tr>
            <td><a href="yii-captcha-captchavalidator.html">yii\captcha\CaptchaValidator</a></td>
            <td>CaptchaValidator validates that the attribute value is the same as the verification code displayed in the CAPTCHA.</td>
        </tr>
        <tr>
            <td><a href="yii-console-application.html">yii\console\Application</a></td>
            <td>Application represents a console application.</td>
        </tr>
        <tr>
            <td><a href="yii-console-controller.html">yii\console\Controller</a></td>
            <td>Controller is the base class of console command classes.</td>
        </tr>
        <tr>
            <td><a href="yii-console-errorhandler.html">yii\console\ErrorHandler</a></td>
            <td>ErrorHandler handles uncaught PHP errors and exceptions.</td>
        </tr>
        <tr>
            <td><a href="yii-console-exception.html">yii\console\Exception</a></td>
            <td>Exception represents an exception caused by incorrect usage of a console command.</td>
        </tr>
        <tr>
            <td><a href="yii-console-markdown.html">yii\console\Markdown</a></td>
            <td>A Markdown parser that enhances markdown for reading in console environments.</td>
        </tr>
        <tr>
            <td><a href="yii-console-request.html">yii\console\Request</a></td>
            <td>The console Request represents the environment information for a console application.</td>
        </tr>
        <tr>
            <td><a href="yii-console-response.html">yii\console\Response</a></td>
            <td>The console Response represents the result of a console application.</td>
        </tr>
        <tr>
            <td><a href="yii-console-unknowncommandexception.html">yii\console\UnknownCommandException</a></td>
            <td>UnknownCommandException represents an exception caused by incorrect usage of a console command.</td>
        </tr>
        <tr>
            <td><a href="yii-console-controllers-assetcontroller.html">yii\console\controllers\AssetController</a></td>
            <td>Allows you to combine and compress your JavaScript and CSS files.</td>
        </tr>
        <tr>
            <td><a href="yii-console-controllers-basemigratecontroller.html">yii\console\controllers\BaseMigrateController</a></td>
            <td>BaseMigrateController is the base class for migrate controllers.</td>
        </tr>
        <tr>
            <td><a href="yii-console-controllers-cachecontroller.html">yii\console\controllers\CacheController</a></td>
            <td>Allows you to flush cache.</td>
        </tr>
        <tr>
            <td><a href="yii-console-controllers-fixturecontroller.html">yii\console\controllers\FixtureController</a></td>
            <td>Manages fixture data loading and unloading.</td>
        </tr>
        <tr>
            <td><a href="yii-console-controllers-helpcontroller.html">yii\console\controllers\HelpController</a></td>
            <td>Provides help information about console commands.</td>
        </tr>
        <tr>
            <td><a href="yii-console-controllers-messagecontroller.html">yii\console\controllers\MessageController</a></td>
            <td>Extracts messages to be translated from source files.</td>
        </tr>
        <tr>
            <td><a href="yii-console-controllers-migratecontroller.html">yii\console\controllers\MigrateController</a></td>
            <td>Manages application migrations.</td>
        </tr>
        <tr>
            <td><a href="yii-console-controllers-servecontroller.html">yii\console\controllers\ServeController</a></td>
            <td>Runs PHP built-in web server</td>
        </tr>
        <tr>
            <td><a href="yii-data-activedataprovider.html">yii\data\ActiveDataProvider</a></td>
            <td>ActiveDataProvider implements a data provider based on <a href="yii-db-query.html">yii\db\Query</a> and <a href="yii-db-activequery.html">yii\db\ActiveQuery</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-data-arraydataprovider.html">yii\data\ArrayDataProvider</a></td>
            <td>ArrayDataProvider implements a data provider based on a data array.</td>
        </tr>
        <tr>
            <td><a href="yii-data-basedataprovider.html">yii\data\BaseDataProvider</a></td>
            <td>BaseDataProvider provides a base class that implements the <a href="yii-data-dataproviderinterface.html">yii\data\DataProviderInterface</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-data-dataproviderinterface.html">yii\data\DataProviderInterface</a></td>
            <td>DataProviderInterface is the interface that must be implemented by data provider classes.</td>
        </tr>
        <tr>
            <td><a href="yii-data-pagination.html">yii\data\Pagination</a></td>
            <td>Pagination represents information relevant to pagination of data items.</td>
        </tr>
        <tr>
            <td><a href="yii-data-sort.html">yii\data\Sort</a></td>
            <td>Sort represents information relevant to sorting.</td>
        </tr>
        <tr>
            <td><a href="yii-data-sqldataprovider.html">yii\data\SqlDataProvider</a></td>
            <td>SqlDataProvider implements a data provider based on a plain SQL statement.</td>
        </tr>
        <tr>
            <td><a href="yii-db-activequery.html">yii\db\ActiveQuery</a></td>
            <td>ActiveQuery represents a DB query associated with an Active Record class.</td>
        </tr>
        <tr>
            <td><a href="yii-db-activequeryinterface.html">yii\db\ActiveQueryInterface</a></td>
            <td>ActiveQueryInterface defines the common interface to be implemented by active record query classes.</td>
        </tr>
        <tr>
            <td><a href="yii-db-activequerytrait.html">yii\db\ActiveQueryTrait</a></td>
            <td>ActiveQueryTrait implements the common methods and properties for active record query classes.</td>
        </tr>
        <tr>
            <td><a href="yii-db-activerecord.html">yii\db\ActiveRecord</a></td>
            <td>ActiveRecord is the base class for classes representing relational data in terms of objects.</td>
        </tr>
        <tr>
            <td><a href="yii-db-activerecordinterface.html">yii\db\ActiveRecordInterface</a></td>
            <td>ActiveRecordInterface</td>
        </tr>
        <tr>
            <td><a href="yii-db-activerelationtrait.html">yii\db\ActiveRelationTrait</a></td>
            <td>ActiveRelationTrait implements the common methods and properties for active record relational queries.</td>
        </tr>
        <tr>
            <td><a href="yii-db-aftersaveevent.html">yii\db\AfterSaveEvent</a></td>
            <td>AfterSaveEvent represents the information available in <a href="yii-db-baseactiverecord.html#EVENT_AFTER_INSERT-detail">yii\db\ActiveRecord::EVENT_AFTER_INSERT</a> and <a href="yii-db-baseactiverecord.html#EVENT_AFTER_UPDATE-detail">yii\db\ActiveRecord::EVENT_AFTER_UPDATE</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-db-baseactiverecord.html">yii\db\BaseActiveRecord</a></td>
            <td>ActiveRecord is the base class for classes representing relational data in terms of objects.</td>
        </tr>
        <tr>
            <td><a href="yii-db-batchqueryresult.html">yii\db\BatchQueryResult</a></td>
            <td>BatchQueryResult represents a batch query from which you can retrieve data in batches.</td>
        </tr>
        <tr>
            <td><a href="yii-db-columnschema.html">yii\db\ColumnSchema</a></td>
            <td>ColumnSchema class describes the metadata of a column in a database table.</td>
        </tr>
        <tr>
            <td><a href="yii-db-columnschemabuilder.html">yii\db\ColumnSchemaBuilder</a></td>
            <td>ColumnSchemaBuilder helps to define database schema types using a PHP interface.</td>
        </tr>
        <tr>
            <td><a href="yii-db-command.html">yii\db\Command</a></td>
            <td>Command represents a SQL statement to be executed against a database.</td>
        </tr>
        <tr>
            <td><a href="yii-db-connection.html">yii\db\Connection</a></td>
            <td>Connection represents a connection to a database via <a href="http://php.net/manual/en/book.pdo.php">PDO</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-db-datareader.html">yii\db\DataReader</a></td>
            <td>DataReader represents a forward-only stream of rows from a query result set.</td>
        </tr>
        <tr>
            <td><a href="yii-db-exception.html">yii\db\Exception</a></td>
            <td>Exception represents an exception that is caused by some DB-related operations.</td>
        </tr>
        <tr>
            <td><a href="yii-db-expression.html">yii\db\Expression</a></td>
            <td>Expression represents a DB expression that does not need escaping or quoting.</td>
        </tr>
        <tr>
            <td><a href="yii-db-integrityexception.html">yii\db\IntegrityException</a></td>
            <td>Exception represents an exception that is caused by violation of DB constraints.</td>
        </tr>
        <tr>
            <td><a href="yii-db-migration.html">yii\db\Migration</a></td>
            <td>Migration is the base class for representing a database migration.</td>
        </tr>
        <tr>
            <td><a href="yii-db-migrationinterface.html">yii\db\MigrationInterface</a></td>
            <td>The MigrationInterface defines the minimum set of methods to be implemented by a database migration.</td>
        </tr>
        <tr>
            <td><a href="yii-db-query.html">yii\db\Query</a></td>
            <td>Query represents a SELECT SQL statement in a way that is independent of DBMS.</td>
        </tr>
        <tr>
            <td><a href="yii-db-querybuilder.html">yii\db\QueryBuilder</a></td>
            <td>QueryBuilder builds a SELECT SQL statement based on the specification given as a <a href="yii-db-query.html">yii\db\Query</a> object.</td>
        </tr>
        <tr>
            <td><a href="yii-db-queryinterface.html">yii\db\QueryInterface</a></td>
            <td>The QueryInterface defines the minimum set of methods to be implemented by a database query.</td>
        </tr>
        <tr>
            <td><a href="yii-db-querytrait.html">yii\db\QueryTrait</a></td>
            <td>The BaseQuery trait represents the minimum method set of a database Query.</td>
        </tr>
        <tr>
            <td><a href="yii-db-schema.html">yii\db\Schema</a></td>
            <td>Schema is the base class for concrete DBMS-specific schema classes.</td>
        </tr>
        <tr>
            <td><a href="yii-db-schemabuildertrait.html">yii\db\SchemaBuilderTrait</a></td>
            <td>SchemaBuilderTrait contains shortcut methods to create instances of <a href="yii-db-columnschemabuilder.html">yii\db\ColumnSchemaBuilder</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-db-staleobjectexception.html">yii\db\StaleObjectException</a></td>
            <td></td>
        </tr>
        <tr>
            <td><a href="yii-db-tableschema.html">yii\db\TableSchema</a></td>
            <td>TableSchema represents the metadata of a database table.</td>
        </tr>
        <tr>
            <td><a href="yii-db-transaction.html">yii\db\Transaction</a></td>
            <td>Transaction represents a DB transaction.</td>
        </tr>
        <tr>
            <td><a href="yii-db-viewfindertrait.html">yii\db\ViewFinderTrait</a></td>
            <td>ViewFinderTrait implements the method getViewNames for finding views in a database.</td>
        </tr>
        <tr>
            <td><a href="yii-db-cubrid-columnschemabuilder.html">yii\db\cubrid\ColumnSchemaBuilder</a></td>
            <td>ColumnSchemaBuilder is the schema builder for Cubrid databases.</td>
        </tr>
        <tr>
            <td><a href="yii-db-cubrid-querybuilder.html">yii\db\cubrid\QueryBuilder</a></td>
            <td>QueryBuilder is the query builder for CUBRID databases (version 9.3.x and higher).</td>
        </tr>
        <tr>
            <td><a href="yii-db-cubrid-schema.html">yii\db\cubrid\Schema</a></td>
            <td>Schema is the class for retrieving metadata from a CUBRID database (version 9.3.x and higher).</td>
        </tr>
        <tr>
            <td><a href="yii-db-mssql-pdo.html">yii\db\mssql\PDO</a></td>
            <td>This is an extension of the default PDO class of MSSQL and DBLIB drivers.</td>
        </tr>
        <tr>
            <td><a href="yii-db-mssql-querybuilder.html">yii\db\mssql\QueryBuilder</a></td>
            <td>QueryBuilder is the query builder for MS SQL Server databases (version 2008 and above).</td>
        </tr>
        <tr>
            <td><a href="yii-db-mssql-schema.html">yii\db\mssql\Schema</a></td>
            <td>Schema is the class for retrieving metadata from a MS SQL Server databases (version 2008 and above).</td>
        </tr>
        <tr>
            <td><a href="yii-db-mssql-sqlsrvpdo.html">yii\db\mssql\SqlsrvPDO</a></td>
            <td>This is an extension of the default PDO class of SQLSRV driver.</td>
        </tr>
        <tr>
            <td><a href="yii-db-mssql-tableschema.html">yii\db\mssql\TableSchema</a></td>
            <td>TableSchema represents the metadata of a database table.</td>
        </tr>
        <tr>
            <td><a href="yii-db-mysql-columnschemabuilder.html">yii\db\mysql\ColumnSchemaBuilder</a></td>
            <td>ColumnSchemaBuilder is the schema builder for MySQL databases.</td>
        </tr>
        <tr>
            <td><a href="yii-db-mysql-querybuilder.html">yii\db\mysql\QueryBuilder</a></td>
            <td>QueryBuilder is the query builder for MySQL databases.</td>
        </tr>
        <tr>
            <td><a href="yii-db-mysql-schema.html">yii\db\mysql\Schema</a></td>
            <td>Schema is the class for retrieving metadata from a MySQL database (version 4.1.x and 5.x).</td>
        </tr>
        <tr>
            <td><a href="yii-db-oci-columnschemabuilder.html">yii\db\oci\ColumnSchemaBuilder</a></td>
            <td>ColumnSchemaBuilder is the schema builder for Oracle databases.</td>
        </tr>
        <tr>
            <td><a href="yii-db-oci-querybuilder.html">yii\db\oci\QueryBuilder</a></td>
            <td>QueryBuilder is the query builder for Oracle databases.</td>
        </tr>
        <tr>
            <td><a href="yii-db-oci-schema.html">yii\db\oci\Schema</a></td>
            <td>Schema is the class for retrieving metadata from an Oracle database</td>
        </tr>
        <tr>
            <td><a href="yii-db-pgsql-querybuilder.html">yii\db\pgsql\QueryBuilder</a></td>
            <td>QueryBuilder is the query builder for PostgreSQL databases.</td>
        </tr>
        <tr>
            <td><a href="yii-db-pgsql-schema.html">yii\db\pgsql\Schema</a></td>
            <td>Schema is the class for retrieving metadata from a PostgreSQL database
                (version 9.x and above).</td>
        </tr>
        <tr>
            <td><a href="yii-db-sqlite-columnschemabuilder.html">yii\db\sqlite\ColumnSchemaBuilder</a></td>
            <td>ColumnSchemaBuilder is the schema builder for Sqlite databases.</td>
        </tr>
        <tr>
            <td><a href="yii-db-sqlite-querybuilder.html">yii\db\sqlite\QueryBuilder</a></td>
            <td>QueryBuilder is the query builder for SQLite databases.</td>
        </tr>
        <tr>
            <td><a href="yii-db-sqlite-schema.html">yii\db\sqlite\Schema</a></td>
            <td>Schema is the class for retrieving metadata from a SQLite (2/3) database.</td>
        </tr>
        <tr>
            <td><a href="yii-di-container.html">yii\di\Container</a></td>
            <td>Container implements a <a href="http://en.wikipedia.org/wiki/Dependency_injection">dependency injection</a> container.</td>
        </tr>
        <tr>
            <td><a href="yii-di-instance.html">yii\di\Instance</a></td>
            <td>Instance represents a reference to a named object in a dependency injection (DI) container or a service locator.</td>
        </tr>
        <tr>
            <td><a href="yii-di-notinstantiableexception.html">yii\di\NotInstantiableException</a></td>
            <td>NotInstantiableException represents an exception caused by incorrect dependency injection container
                configuration or usage.</td>
        </tr>
        <tr>
            <td><a href="yii-di-servicelocator.html">yii\di\ServiceLocator</a></td>
            <td>ServiceLocator implements a <a href="http://en.wikipedia.org/wiki/Service_locator_pattern">service locator</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-filters-accesscontrol.html">yii\filters\AccessControl</a></td>
            <td>AccessControl provides simple access control based on a set of rules.</td>
        </tr>
        <tr>
            <td><a href="yii-filters-accessrule.html">yii\filters\AccessRule</a></td>
            <td>This class represents an access rule defined by the <a href="yii-filters-accesscontrol.html">yii\filters\AccessControl</a> action filter</td>
        </tr>
        <tr>
            <td><a href="yii-filters-contentnegotiator.html">yii\filters\ContentNegotiator</a></td>
            <td>ContentNegotiator supports response format negotiation and application language negotiation.</td>
        </tr>
        <tr>
            <td><a href="yii-filters-cors.html">yii\filters\Cors</a></td>
            <td>Cors filter implements <a href="http://en.wikipedia.org/wiki/Cross-origin_resource_sharing">Cross Origin Resource Sharing</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-filters-hostcontrol.html">yii\filters\HostControl</a></td>
            <td>HostControl provides simple control over requested host name.</td>
        </tr>
        <tr>
            <td><a href="yii-filters-httpcache.html">yii\filters\HttpCache</a></td>
            <td>HttpCache implements client-side caching by utilizing the <code>Last-Modified</code> and <code>ETag</code> HTTP headers.</td>
        </tr>
        <tr>
            <td><a href="yii-filters-pagecache.html">yii\filters\PageCache</a></td>
            <td>PageCache implements server-side caching of whole pages.</td>
        </tr>
        <tr>
            <td><a href="yii-filters-ratelimitinterface.html">yii\filters\RateLimitInterface</a></td>
            <td>RateLimitInterface is the interface that may be implemented by an identity object to enforce rate limiting.</td>
        </tr>
        <tr>
            <td><a href="yii-filters-ratelimiter.html">yii\filters\RateLimiter</a></td>
            <td>RateLimiter implements a rate limiting algorithm based on the <a href="http://en.wikipedia.org/wiki/Leaky_bucket">leaky bucket algorithm</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-filters-verbfilter.html">yii\filters\VerbFilter</a></td>
            <td>VerbFilter is an action filter that filters by HTTP request methods.</td>
        </tr>
        <tr>
            <td><a href="yii-filters-auth-authinterface.html">yii\filters\auth\AuthInterface</a></td>
            <td>AuthInterface is the interface that should be implemented by auth method classes.</td>
        </tr>
        <tr>
            <td><a href="yii-filters-auth-authmethod.html">yii\filters\auth\AuthMethod</a></td>
            <td>AuthMethod is a base class implementing the <a href="yii-filters-auth-authinterface.html">yii\filters\auth\AuthInterface</a> interface.</td>
        </tr>
        <tr>
            <td><a href="yii-filters-auth-compositeauth.html">yii\filters\auth\CompositeAuth</a></td>
            <td>CompositeAuth is an action filter that supports multiple authentication methods at the same time.</td>
        </tr>
        <tr>
            <td><a href="yii-filters-auth-httpbasicauth.html">yii\filters\auth\HttpBasicAuth</a></td>
            <td>HttpBasicAuth is an action filter that supports the HTTP Basic authentication method.</td>
        </tr>
        <tr>
            <td><a href="yii-filters-auth-httpbearerauth.html">yii\filters\auth\HttpBearerAuth</a></td>
            <td>HttpBearerAuth is an action filter that supports the authentication method based on HTTP Bearer token.</td>
        </tr>
        <tr>
            <td><a href="yii-filters-auth-queryparamauth.html">yii\filters\auth\QueryParamAuth</a></td>
            <td>QueryParamAuth is an action filter that supports the authentication based on the access token passed through a query parameter.</td>
        </tr>
        <tr>
            <td><a href="yii-grid-actioncolumn.html">yii\grid\ActionColumn</a></td>
            <td>ActionColumn is a column for the <a href="yii-grid-gridview.html">yii\grid\GridView</a> widget that displays buttons for viewing and manipulating the items.</td>
        </tr>
        <tr>
            <td><a href="yii-grid-checkboxcolumn.html">yii\grid\CheckboxColumn</a></td>
            <td>CheckboxColumn displays a column of checkboxes in a grid view.</td>
        </tr>
        <tr>
            <td><a href="yii-grid-column.html">yii\grid\Column</a></td>
            <td>Column is the base class of all <a href="yii-grid-gridview.html">yii\grid\GridView</a> column classes.</td>
        </tr>
        <tr>
            <td><a href="yii-grid-datacolumn.html">yii\grid\DataColumn</a></td>
            <td>DataColumn is the default column type for the <a href="yii-grid-gridview.html">yii\grid\GridView</a> widget.</td>
        </tr>
        <tr>
            <td><a href="yii-grid-gridview.html">yii\grid\GridView</a></td>
            <td>The GridView widget is used to display data in a grid.</td>
        </tr>
        <tr>
            <td><a href="yii-grid-gridviewasset.html">yii\grid\GridViewAsset</a></td>
            <td>This asset bundle provides the javascript files for the <a href="yii-grid-gridview.html">yii\grid\GridView</a> widget.</td>
        </tr>
        <tr>
            <td><a href="yii-grid-radiobuttoncolumn.html">yii\grid\RadioButtonColumn</a></td>
            <td>RadioButtonColumn displays a column of radio buttons in a grid view.</td>
        </tr>
        <tr>
            <td><a href="yii-grid-serialcolumn.html">yii\grid\SerialColumn</a></td>
            <td>SerialColumn displays a column of row numbers (1-based).</td>
        </tr>
        <tr>
            <td><a href="yii-helpers-arrayhelper.html">yii\helpers\ArrayHelper</a></td>
            <td>ArrayHelper provides additional array functionality that you can use in your
                application.</td>
        </tr>
        <tr>
            <td><a href="yii-helpers-basearrayhelper.html">yii\helpers\BaseArrayHelper</a></td>
            <td>BaseArrayHelper provides concrete implementation for <a href="yii-helpers-arrayhelper.html">yii\helpers\ArrayHelper</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-helpers-baseconsole.html">yii\helpers\BaseConsole</a></td>
            <td>BaseConsole provides concrete implementation for <a href="yii-helpers-console.html">yii\helpers\Console</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-helpers-basefilehelper.html">yii\helpers\BaseFileHelper</a></td>
            <td>BaseFileHelper provides concrete implementation for <a href="yii-helpers-filehelper.html">yii\helpers\FileHelper</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-helpers-baseformatconverter.html">yii\helpers\BaseFormatConverter</a></td>
            <td>BaseFormatConverter provides concrete implementation for <a href="yii-helpers-formatconverter.html">yii\helpers\FormatConverter</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-helpers-basehtml.html">yii\helpers\BaseHtml</a></td>
            <td>BaseHtml provides concrete implementation for <a href="yii-helpers-html.html">yii\helpers\Html</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-helpers-basehtmlpurifier.html">yii\helpers\BaseHtmlPurifier</a></td>
            <td>BaseHtmlPurifier provides concrete implementation for <a href="yii-helpers-htmlpurifier.html">yii\helpers\HtmlPurifier</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-helpers-baseinflector.html">yii\helpers\BaseInflector</a></td>
            <td>BaseInflector provides concrete implementation for <a href="yii-helpers-inflector.html">yii\helpers\Inflector</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-helpers-basejson.html">yii\helpers\BaseJson</a></td>
            <td>BaseJson provides concrete implementation for <a href="yii-helpers-json.html">yii\helpers\Json</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-helpers-basemarkdown.html">yii\helpers\BaseMarkdown</a></td>
            <td>BaseMarkdown provides concrete implementation for <a href="yii-helpers-markdown.html">yii\helpers\Markdown</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-helpers-basestringhelper.html">yii\helpers\BaseStringHelper</a></td>
            <td>BaseStringHelper provides concrete implementation for <a href="yii-helpers-stringhelper.html">yii\helpers\StringHelper</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-helpers-baseurl.html">yii\helpers\BaseUrl</a></td>
            <td>BaseUrl provides concrete implementation for <a href="yii-helpers-url.html">yii\helpers\Url</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-helpers-basevardumper.html">yii\helpers\BaseVarDumper</a></td>
            <td>BaseVarDumper provides concrete implementation for <a href="yii-helpers-vardumper.html">yii\helpers\VarDumper</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-helpers-console.html">yii\helpers\Console</a></td>
            <td>Console helper provides useful methods for command line related tasks such as getting input or formatting and coloring
                output.</td>
        </tr>
        <tr>
            <td><a href="yii-helpers-filehelper.html">yii\helpers\FileHelper</a></td>
            <td>File system helper</td>
        </tr>
        <tr>
            <td><a href="yii-helpers-formatconverter.html">yii\helpers\FormatConverter</a></td>
            <td>FormatConverter provides functionality to convert between different formatting pattern formats.</td>
        </tr>
        <tr>
            <td><a href="yii-helpers-html.html">yii\helpers\Html</a></td>
            <td>Html provides a set of static methods for generating commonly used HTML tags.</td>
        </tr>
        <tr>
            <td><a href="yii-helpers-htmlpurifier.html">yii\helpers\HtmlPurifier</a></td>
            <td>HtmlPurifier provides an ability to clean up HTML from any harmful code.</td>
        </tr>
        <tr>
            <td><a href="yii-helpers-inflector.html">yii\helpers\Inflector</a></td>
            <td>Inflector pluralizes and singularizes English nouns. It also contains some other useful methods.</td>
        </tr>
        <tr>
            <td><a href="yii-helpers-json.html">yii\helpers\Json</a></td>
            <td>Json is a helper class providing JSON data encoding and decoding.</td>
        </tr>
        <tr>
            <td><a href="yii-helpers-markdown.html">yii\helpers\Markdown</a></td>
            <td>Markdown provides an ability to transform markdown into HTML.</td>
        </tr>
        <tr>
            <td><a href="yii-helpers-replacearrayvalue.html">yii\helpers\ReplaceArrayValue</a></td>
            <td>Object that represents the replacement of array value while performing <a href="yii-helpers-basearrayhelper.html#merge()-detail">yii\helpers\ArrayHelper::merge()</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-helpers-stringhelper.html">yii\helpers\StringHelper</a></td>
            <td>StringHelper</td>
        </tr>
        <tr>
            <td><a href="yii-helpers-unsetarrayvalue.html">yii\helpers\UnsetArrayValue</a></td>
            <td>Object that represents the removal of array value while performing <a href="yii-helpers-basearrayhelper.html#merge()-detail">yii\helpers\ArrayHelper::merge()</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-helpers-url.html">yii\helpers\Url</a></td>
            <td>Url provides a set of static methods for managing URLs.</td>
        </tr>
        <tr>
            <td><a href="yii-helpers-vardumper.html">yii\helpers\VarDumper</a></td>
            <td>VarDumper is intended to replace the buggy PHP function var_dump and print_r.</td>
        </tr>
        <tr>
            <td><a href="yii-i18n-dbmessagesource.html">yii\i18n\DbMessageSource</a></td>
            <td>DbMessageSource extends <a href="yii-i18n-messagesource.html">yii\i18n\MessageSource</a> and represents a message source that stores translated
                messages in database.</td>
        </tr>
        <tr>
            <td><a href="yii-i18n-formatter.html">yii\i18n\Formatter</a></td>
            <td>Formatter provides a set of commonly used data formatting methods.</td>
        </tr>
        <tr>
            <td><a href="yii-i18n-gettextfile.html">yii\i18n\GettextFile</a></td>
            <td>GettextFile is the base class for representing a Gettext message file.</td>
        </tr>
        <tr>
            <td><a href="yii-i18n-gettextmessagesource.html">yii\i18n\GettextMessageSource</a></td>
            <td>GettextMessageSource represents a message source that is based on GNU Gettext.</td>
        </tr>
        <tr>
            <td><a href="yii-i18n-gettextmofile.html">yii\i18n\GettextMoFile</a></td>
            <td>GettextMoFile represents an MO Gettext message file.</td>
        </tr>
        <tr>
            <td><a href="yii-i18n-gettextpofile.html">yii\i18n\GettextPoFile</a></td>
            <td>GettextPoFile represents a PO Gettext message file.</td>
        </tr>
        <tr>
            <td><a href="yii-i18n-i18n.html">yii\i18n\I18N</a></td>
            <td>I18N provides features related with internationalization (I18N) and localization (L10N).</td>
        </tr>
        <tr>
            <td><a href="yii-i18n-messageformatter.html">yii\i18n\MessageFormatter</a></td>
            <td>MessageFormatter allows formatting messages via <a href="http://userguide.icu-project.org/formatparse/messages">ICU message format</a></td>
        </tr>
        <tr>
            <td><a href="yii-i18n-messagesource.html">yii\i18n\MessageSource</a></td>
            <td>MessageSource is the base class for message translation repository classes.</td>
        </tr>
        <tr>
            <td><a href="yii-i18n-missingtranslationevent.html">yii\i18n\MissingTranslationEvent</a></td>
            <td>MissingTranslationEvent represents the parameter for the <a href="yii-i18n-messagesource.html#EVENT_MISSING_TRANSLATION-detail">yii\i18n\MessageSource::EVENT_MISSING_TRANSLATION</a> event.</td>
        </tr>
        <tr>
            <td><a href="yii-i18n-phpmessagesource.html">yii\i18n\PhpMessageSource</a></td>
            <td>PhpMessageSource represents a message source that stores translated messages in PHP scripts.</td>
        </tr>
        <tr>
            <td><a href="yii-log-dbtarget.html">yii\log\DbTarget</a></td>
            <td>DbTarget stores log messages in a database table.</td>
        </tr>
        <tr>
            <td><a href="yii-log-dispatcher.html">yii\log\Dispatcher</a></td>
            <td>Dispatcher manages a set of <a href="yii-log-target.html">log targets</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-log-emailtarget.html">yii\log\EmailTarget</a></td>
            <td>EmailTarget sends selected log messages to the specified email addresses.</td>
        </tr>
        <tr>
            <td><a href="yii-log-filetarget.html">yii\log\FileTarget</a></td>
            <td>FileTarget records log messages in a file.</td>
        </tr>
        <tr>
            <td><a href="yii-log-logger.html">yii\log\Logger</a></td>
            <td>Logger records logged messages in memory and sends them to different targets if <a href="yii-log-logger.html#$dispatcher-detail">$dispatcher</a> is set.</td>
        </tr>
        <tr>
            <td><a href="yii-log-syslogtarget.html">yii\log\SyslogTarget</a></td>
            <td>SyslogTarget writes log to syslog.</td>
        </tr>
        <tr>
            <td><a href="yii-log-target.html">yii\log\Target</a></td>
            <td>Target is the base class for all log target classes.</td>
        </tr>
        <tr>
            <td><a href="yii-mail-basemailer.html">yii\mail\BaseMailer</a></td>
            <td>BaseMailer serves as a base class that implements the basic functions required by <a href="yii-mail-mailerinterface.html">yii\mail\MailerInterface</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-mail-basemessage.html">yii\mail\BaseMessage</a></td>
            <td>BaseMessage serves as a base class that implements the <a href="yii-mail-basemessage.html#send()-detail">send()</a> method required by <a href="yii-mail-messageinterface.html">yii\mail\MessageInterface</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-mail-mailevent.html">yii\mail\MailEvent</a></td>
            <td>MailEvent represents the event parameter used for events triggered by <a href="yii-mail-basemailer.html">yii\mail\BaseMailer</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-mail-mailerinterface.html">yii\mail\MailerInterface</a></td>
            <td>MailerInterface is the interface that should be implemented by mailer classes.</td>
        </tr>
        <tr>
            <td><a href="yii-mail-messageinterface.html">yii\mail\MessageInterface</a></td>
            <td>MessageInterface is the interface that should be implemented by mail message classes.</td>
        </tr>
        <tr>
            <td><a href="yii-mutex-dbmutex.html">yii\mutex\DbMutex</a></td>
            <td>DbMutex is the base class for classes, which relies on database while implementing mutex "lock" mechanism.</td>
        </tr>
        <tr>
            <td><a href="yii-mutex-filemutex.html">yii\mutex\FileMutex</a></td>
            <td>FileMutex implements mutex "lock" mechanism via local file system files.</td>
        </tr>
        <tr>
            <td><a href="yii-mutex-mutex.html">yii\mutex\Mutex</a></td>
            <td>The Mutex component allows mutual execution of concurrent processes in order to prevent "race conditions".</td>
        </tr>
        <tr>
            <td><a href="yii-mutex-mysqlmutex.html">yii\mutex\MysqlMutex</a></td>
            <td>MysqlMutex implements mutex "lock" mechanism via MySQL locks.</td>
        </tr>
        <tr>
            <td><a href="yii-mutex-oraclemutex.html">yii\mutex\OracleMutex</a></td>
            <td>OracleMutex implements mutex "lock" mechanism via Oracle locks.</td>
        </tr>
        <tr>
            <td><a href="yii-mutex-pgsqlmutex.html">yii\mutex\PgsqlMutex</a></td>
            <td>PgsqlMutex implements mutex "lock" mechanism via PgSQL locks.</td>
        </tr>
        <tr>
            <td><a href="yii-rbac-assignment.html">yii\rbac\Assignment</a></td>
            <td>Assignment represents an assignment of a role to a user.</td>
        </tr>
        <tr>
            <td><a href="yii-rbac-basemanager.html">yii\rbac\BaseManager</a></td>
            <td>BaseManager is a base class implementing <a href="yii-rbac-managerinterface.html">yii\rbac\ManagerInterface</a> for RBAC management.</td>
        </tr>
        <tr>
            <td><a href="yii-rbac-checkaccessinterface.html">yii\rbac\CheckAccessInterface</a></td>
            <td>For more details and usage information on CheckAccessInterface, see the <a href="./guide-security-authorization.html">guide article on security authorization</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-rbac-dbmanager.html">yii\rbac\DbManager</a></td>
            <td>DbManager represents an authorization manager that stores authorization information in database.</td>
        </tr>
        <tr>
            <td><a href="yii-rbac-item.html">yii\rbac\Item</a></td>
            <td>For more details and usage information on Item, see the <a href="./guide-security-authorization.html">guide article on security authorization</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-rbac-managerinterface.html">yii\rbac\ManagerInterface</a></td>
            <td>For more details and usage information on ManagerInterface, see the <a href="./guide-security-authorization.html">guide article on security authorization</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-rbac-permission.html">yii\rbac\Permission</a></td>
            <td>For more details and usage information on Permission, see the <a href="./guide-security-authorization.html">guide article on security authorization</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-rbac-phpmanager.html">yii\rbac\PhpManager</a></td>
            <td>PhpManager represents an authorization manager that stores authorization
                information in terms of a PHP script file.</td>
        </tr>
        <tr>
            <td><a href="yii-rbac-role.html">yii\rbac\Role</a></td>
            <td>For more details and usage information on Role, see the <a href="./guide-security-authorization.html">guide article on security authorization</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-rbac-rule.html">yii\rbac\Rule</a></td>
            <td>Rule represents a business constraint that may be associated with a role, permission or assignment.</td>
        </tr>
        <tr>
            <td><a href="yii-rest-action.html">yii\rest\Action</a></td>
            <td>Action is the base class for action classes that implement RESTful API.</td>
        </tr>
        <tr>
            <td><a href="yii-rest-activecontroller.html">yii\rest\ActiveController</a></td>
            <td>ActiveController implements a common set of actions for supporting RESTful access to ActiveRecord.</td>
        </tr>
        <tr>
            <td><a href="yii-rest-controller.html">yii\rest\Controller</a></td>
            <td>Controller is the base class for RESTful API controller classes.</td>
        </tr>
        <tr>
            <td><a href="yii-rest-createaction.html">yii\rest\CreateAction</a></td>
            <td>CreateAction implements the API endpoint for creating a new model from the given data.</td>
        </tr>
        <tr>
            <td><a href="yii-rest-deleteaction.html">yii\rest\DeleteAction</a></td>
            <td>DeleteAction implements the API endpoint for deleting a model.</td>
        </tr>
        <tr>
            <td><a href="yii-rest-indexaction.html">yii\rest\IndexAction</a></td>
            <td>IndexAction implements the API endpoint for listing multiple models.</td>
        </tr>
        <tr>
            <td><a href="yii-rest-optionsaction.html">yii\rest\OptionsAction</a></td>
            <td>OptionsAction responds to the OPTIONS request by sending back an <code>Allow</code> header.</td>
        </tr>
        <tr>
            <td><a href="yii-rest-serializer.html">yii\rest\Serializer</a></td>
            <td>Serializer converts resource objects and collections into array representation.</td>
        </tr>
        <tr>
            <td><a href="yii-rest-updateaction.html">yii\rest\UpdateAction</a></td>
            <td>UpdateAction implements the API endpoint for updating a model.</td>
        </tr>
        <tr>
            <td><a href="yii-rest-urlrule.html">yii\rest\UrlRule</a></td>
            <td>UrlRule is provided to simplify the creation of URL rules for RESTful API support.</td>
        </tr>
        <tr>
            <td><a href="yii-rest-viewaction.html">yii\rest\ViewAction</a></td>
            <td>ViewAction implements the API endpoint for returning the detailed information about a model.</td>
        </tr>
        <tr>
            <td><a href="yii-test-activefixture.html">yii\test\ActiveFixture</a></td>
            <td>ActiveFixture represents a fixture backed up by a <a href="yii-test-baseactivefixture.html#$modelClass-detail">ActiveRecord class</a> or a <a href="yii-test-activefixture.html#$tableName-detail">database table</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-test-arrayfixture.html">yii\test\ArrayFixture</a></td>
            <td>ArrayFixture represents arbitrary fixture that can be loaded from PHP files.</td>
        </tr>
        <tr>
            <td><a href="yii-test-baseactivefixture.html">yii\test\BaseActiveFixture</a></td>
            <td>BaseActiveFixture is the base class for fixture classes that support accessing fixture data as ActiveRecord objects.</td>
        </tr>
        <tr>
            <td><a href="yii-test-dbfixture.html">yii\test\DbFixture</a></td>
            <td>DbFixture is the base class for DB-related fixtures.</td>
        </tr>
        <tr>
            <td><a href="yii-test-fixture.html">yii\test\Fixture</a></td>
            <td>Fixture represents a fixed state of a test environment.</td>
        </tr>
        <tr>
            <td><a href="yii-test-fixturetrait.html">yii\test\FixtureTrait</a></td>
            <td>FixtureTrait provides functionalities for loading, unloading and accessing fixtures for a test case.</td>
        </tr>
        <tr>
            <td><a href="yii-test-initdbfixture.html">yii\test\InitDbFixture</a></td>
            <td>InitDbFixture represents the initial state needed for DB-related tests.</td>
        </tr>
        <tr>
            <td><a href="yii-validators-booleanvalidator.html">yii\validators\BooleanValidator</a></td>
            <td>BooleanValidator checks if the attribute value is a boolean value.</td>
        </tr>
        <tr>
            <td><a href="yii-validators-comparevalidator.html">yii\validators\CompareValidator</a></td>
            <td>CompareValidator compares the specified attribute value with another value.</td>
        </tr>
        <tr>
            <td><a href="yii-validators-datevalidator.html">yii\validators\DateValidator</a></td>
            <td>DateValidator verifies if the attribute represents a date, time or datetime in a proper <a href="yii-validators-datevalidator.html#$format-detail">$format</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-validators-defaultvaluevalidator.html">yii\validators\DefaultValueValidator</a></td>
            <td>DefaultValueValidator sets the attribute to be the specified default value.</td>
        </tr>
        <tr>
            <td><a href="yii-validators-eachvalidator.html">yii\validators\EachValidator</a></td>
            <td>EachValidator validates an array by checking each of its elements against an embedded validation rule.</td>
        </tr>
        <tr>
            <td><a href="yii-validators-emailvalidator.html">yii\validators\EmailValidator</a></td>
            <td>EmailValidator validates that the attribute value is a valid email address.</td>
        </tr>
        <tr>
            <td><a href="yii-validators-existvalidator.html">yii\validators\ExistValidator</a></td>
            <td>ExistValidator validates that the attribute value exists in a table.</td>
        </tr>
        <tr>
            <td><a href="yii-validators-filevalidator.html">yii\validators\FileValidator</a></td>
            <td>FileValidator verifies if an attribute is receiving a valid uploaded file.</td>
        </tr>
        <tr>
            <td><a href="yii-validators-filtervalidator.html">yii\validators\FilterValidator</a></td>
            <td>FilterValidator converts the attribute value according to a filter.</td>
        </tr>
        <tr>
            <td><a href="yii-validators-imagevalidator.html">yii\validators\ImageValidator</a></td>
            <td>ImageValidator verifies if an attribute is receiving a valid image.</td>
        </tr>
        <tr>
            <td><a href="yii-validators-inlinevalidator.html">yii\validators\InlineValidator</a></td>
            <td>InlineValidator represents a validator which is defined as a method in the object being validated.</td>
        </tr>
        <tr>
            <td><a href="yii-validators-ipvalidator.html">yii\validators\IpValidator</a></td>
            <td>The validator checks if the attribute value is a valid IPv4/IPv6 address or subnet.</td>
        </tr>
        <tr>
            <td><a href="yii-validators-numbervalidator.html">yii\validators\NumberValidator</a></td>
            <td>NumberValidator validates that the attribute value is a number.</td>
        </tr>
        <tr>
            <td><a href="yii-validators-punycodeasset.html">yii\validators\PunycodeAsset</a></td>
            <td>This asset bundle provides the javascript files needed for the <a href="yii-validators-emailvalidator.html">yii\validators\EmailValidator</a>s client validation.</td>
        </tr>
        <tr>
            <td><a href="yii-validators-rangevalidator.html">yii\validators\RangeValidator</a></td>
            <td>RangeValidator validates that the attribute value is among a list of values.</td>
        </tr>
        <tr>
            <td><a href="yii-validators-regularexpressionvalidator.html">yii\validators\RegularExpressionValidator</a></td>
            <td>RegularExpressionValidator validates that the attribute value matches the specified <a href="yii-validators-regularexpressionvalidator.html#$pattern-detail">$pattern</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-validators-requiredvalidator.html">yii\validators\RequiredValidator</a></td>
            <td>RequiredValidator validates that the specified attribute does not have null or empty value.</td>
        </tr>
        <tr>
            <td><a href="yii-validators-safevalidator.html">yii\validators\SafeValidator</a></td>
            <td>SafeValidator serves as a dummy validator whose main purpose is to mark the attributes to be safe for massive assignment.</td>
        </tr>
        <tr>
            <td><a href="yii-validators-stringvalidator.html">yii\validators\StringValidator</a></td>
            <td>StringValidator validates that the attribute value is of certain length.</td>
        </tr>
        <tr>
            <td><a href="yii-validators-uniquevalidator.html">yii\validators\UniqueValidator</a></td>
            <td>UniqueValidator validates that the attribute value is unique in the specified database table.</td>
        </tr>
        <tr>
            <td><a href="yii-validators-urlvalidator.html">yii\validators\UrlValidator</a></td>
            <td>UrlValidator validates that the attribute value is a valid http or https URL.</td>
        </tr>
        <tr>
            <td><a href="yii-validators-validationasset.html">yii\validators\ValidationAsset</a></td>
            <td>This asset bundle provides the javascript files for client validation.</td>
        </tr>
        <tr>
            <td><a href="yii-validators-validator.html">yii\validators\Validator</a></td>
            <td>Validator is the base class for all validators.</td>
        </tr>
        <tr>
            <td><a href="yii-web-application.html">yii\web\Application</a></td>
            <td>Application is the base class for all web application classes.</td>
        </tr>
        <tr>
            <td><a href="yii-web-assetbundle.html">yii\web\AssetBundle</a></td>
            <td>AssetBundle represents a collection of asset files, such as CSS, JS, images.</td>
        </tr>
        <tr>
            <td><a href="yii-web-assetconverter.html">yii\web\AssetConverter</a></td>
            <td>AssetConverter supports conversion of several popular script formats into JS or CSS scripts.</td>
        </tr>
        <tr>
            <td><a href="yii-web-assetconverterinterface.html">yii\web\AssetConverterInterface</a></td>
            <td>The AssetConverterInterface must be implemented by asset converter classes.</td>
        </tr>
        <tr>
            <td><a href="yii-web-assetmanager.html">yii\web\AssetManager</a></td>
            <td>AssetManager manages asset bundle configuration and loading.</td>
        </tr>
        <tr>
            <td><a href="yii-web-badrequesthttpexception.html">yii\web\BadRequestHttpException</a></td>
            <td>BadRequestHttpException represents a "Bad Request" HTTP exception with status code 400.</td>
        </tr>
        <tr>
            <td><a href="yii-web-cachesession.html">yii\web\CacheSession</a></td>
            <td>CacheSession implements a session component using cache as storage medium.</td>
        </tr>
        <tr>
            <td><a href="yii-web-compositeurlrule.html">yii\web\CompositeUrlRule</a></td>
            <td>CompositeUrlRule is the base class for URL rule classes that consist of multiple simpler rules.</td>
        </tr>
        <tr>
            <td><a href="yii-web-conflicthttpexception.html">yii\web\ConflictHttpException</a></td>
            <td>ConflictHttpException represents a "Conflict" HTTP exception with status code 409</td>
        </tr>
        <tr>
            <td><a href="yii-web-controller.html">yii\web\Controller</a></td>
            <td>Controller is the base class of web controllers.</td>
        </tr>
        <tr>
            <td><a href="yii-web-cookie.html">yii\web\Cookie</a></td>
            <td>Cookie represents information related with a cookie, such as <a href="yii-web-cookie.html#$name-detail">$name</a>, <a href="yii-web-cookie.html#$value-detail">$value</a>, <a href="yii-web-cookie.html#$domain-detail">$domain</a>, etc.</td>
        </tr>
        <tr>
            <td><a href="yii-web-cookiecollection.html">yii\web\CookieCollection</a></td>
            <td>CookieCollection maintains the cookies available in the current request.</td>
        </tr>
        <tr>
            <td><a href="yii-web-dbsession.html">yii\web\DbSession</a></td>
            <td>DbSession extends <a href="yii-web-session.html">yii\web\Session</a> by using database as session data storage.</td>
        </tr>
        <tr>
            <td><a href="yii-web-erroraction.html">yii\web\ErrorAction</a></td>
            <td>ErrorAction displays application errors using a specified view.</td>
        </tr>
        <tr>
            <td><a href="yii-web-errorhandler.html">yii\web\ErrorHandler</a></td>
            <td>ErrorHandler handles uncaught PHP errors and exceptions.</td>
        </tr>
        <tr>
            <td><a href="yii-web-forbiddenhttpexception.html">yii\web\ForbiddenHttpException</a></td>
            <td>ForbiddenHttpException represents a "Forbidden" HTTP exception with status code 403.</td>
        </tr>
        <tr>
            <td><a href="yii-web-gonehttpexception.html">yii\web\GoneHttpException</a></td>
            <td>GoneHttpException represents a "Gone" HTTP exception with status code 410</td>
        </tr>
        <tr>
            <td><a href="yii-web-groupurlrule.html">yii\web\GroupUrlRule</a></td>
            <td>GroupUrlRule represents a collection of URL rules sharing the same prefix in their patterns and routes.</td>
        </tr>
        <tr>
            <td><a href="yii-web-headercollection.html">yii\web\HeaderCollection</a></td>
            <td>HeaderCollection is used by <a href="yii-web-response.html">yii\web\Response</a> to maintain the currently registered HTTP headers.</td>
        </tr>
        <tr>
            <td><a href="yii-web-htmlresponseformatter.html">yii\web\HtmlResponseFormatter</a></td>
            <td>HtmlResponseFormatter formats the given data into an HTML response content.</td>
        </tr>
        <tr>
            <td><a href="yii-web-httpexception.html">yii\web\HttpException</a></td>
            <td>HttpException represents an exception caused by an improper request of the end-user.</td>
        </tr>
        <tr>
            <td><a href="yii-web-identityinterface.html">yii\web\IdentityInterface</a></td>
            <td>IdentityInterface is the interface that should be implemented by a class providing identity information.</td>
        </tr>
        <tr>
            <td><a href="yii-web-jqueryasset.html">yii\web\JqueryAsset</a></td>
            <td>This asset bundle provides the <a href="http://jquery.com/">jQuery</a> JavaScript library.</td>
        </tr>
        <tr>
            <td><a href="yii-web-jsexpression.html">yii\web\JsExpression</a></td>
            <td>JsExpression marks a string as a JavaScript expression.</td>
        </tr>
        <tr>
            <td><a href="yii-web-jsonparser.html">yii\web\JsonParser</a></td>
            <td>Parses a raw HTTP request using <a href="yii-helpers-basejson.html#decode()-detail">yii\helpers\Json::decode()</a></td>
        </tr>
        <tr>
            <td><a href="yii-web-jsonresponseformatter.html">yii\web\JsonResponseFormatter</a></td>
            <td>JsonResponseFormatter formats the given data into a JSON or JSONP response content.</td>
        </tr>
        <tr>
            <td><a href="yii-web-link.html">yii\web\Link</a></td>
            <td>Link represents a link object as defined in <a href="https://tools.ietf.org/html/draft-kelly-json-hal-03">JSON Hypermedia API Language</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-web-linkable.html">yii\web\Linkable</a></td>
            <td>Linkable is the interface that should be implemented by classes that typically represent locatable resources.</td>
        </tr>
        <tr>
            <td><a href="yii-web-methodnotallowedhttpexception.html">yii\web\MethodNotAllowedHttpException</a></td>
            <td>MethodNotAllowedHttpException represents a "Method Not Allowed" HTTP exception with status code 405.</td>
        </tr>
        <tr>
            <td><a href="yii-web-multifieldsession.html">yii\web\MultiFieldSession</a></td>
            <td>MultiFieldSession is the base class for session storage implementations with multi-field data storage support.</td>
        </tr>
        <tr>
            <td><a href="yii-web-multipartformdataparser.html">yii\web\MultipartFormDataParser</a></td>
            <td>MultipartFormDataParser parses content encoded as 'multipart/form-data'.</td>
        </tr>
        <tr>
            <td><a href="yii-web-notacceptablehttpexception.html">yii\web\NotAcceptableHttpException</a></td>
            <td>NotAcceptableHttpException represents a "Not Acceptable" HTTP exception with status code 406</td>
        </tr>
        <tr>
            <td><a href="yii-web-notfoundhttpexception.html">yii\web\NotFoundHttpException</a></td>
            <td>NotFoundHttpException represents a "Not Found" HTTP exception with status code 404.</td>
        </tr>
        <tr>
            <td><a href="yii-web-rangenotsatisfiablehttpexception.html">yii\web\RangeNotSatisfiableHttpException</a></td>
            <td>RangeNotSatisfiableHttpException represents an exception caused by an improper request of the end-user.</td>
        </tr>
        <tr>
            <td><a href="yii-web-request.html">yii\web\Request</a></td>
            <td>The web Request class represents an HTTP request</td>
        </tr>
        <tr>
            <td><a href="yii-web-requestparserinterface.html">yii\web\RequestParserInterface</a></td>
            <td>Interface for classes that parse the raw request body into a parameters array.</td>
        </tr>
        <tr>
            <td><a href="yii-web-response.html">yii\web\Response</a></td>
            <td>The web Response class represents an HTTP response</td>
        </tr>
        <tr>
            <td><a href="yii-web-responseformatterinterface.html">yii\web\ResponseFormatterInterface</a></td>
            <td>ResponseFormatterInterface specifies the interface needed to format a response before it is sent out.</td>
        </tr>
        <tr>
            <td><a href="yii-web-servererrorhttpexception.html">yii\web\ServerErrorHttpException</a></td>
            <td>ServerErrorHttpException represents an "Internal Server Error" HTTP exception with status code 500.</td>
        </tr>
        <tr>
            <td><a href="yii-web-session.html">yii\web\Session</a></td>
            <td>Session provides session data management and the related configurations.</td>
        </tr>
        <tr>
            <td><a href="yii-web-sessioniterator.html">yii\web\SessionIterator</a></td>
            <td>SessionIterator implements an <a href="http://www.php.net/class.iterator">iterator</a> for traversing session variables managed by <a href="yii-web-session.html">yii\web\Session</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-web-toomanyrequestshttpexception.html">yii\web\TooManyRequestsHttpException</a></td>
            <td>TooManyRequestsHttpException represents a "Too Many Requests" HTTP exception with status code 429</td>
        </tr>
        <tr>
            <td><a href="yii-web-unauthorizedhttpexception.html">yii\web\UnauthorizedHttpException</a></td>
            <td>UnauthorizedHttpException represents an "Unauthorized" HTTP exception with status code 401</td>
        </tr>
        <tr>
            <td><a href="yii-web-unprocessableentityhttpexception.html">yii\web\UnprocessableEntityHttpException</a></td>
            <td>UnprocessableEntityHttpException represents an "Unprocessable Entity" HTTP
                exception with status code 422.</td>
        </tr>
        <tr>
            <td><a href="yii-web-unsupportedmediatypehttpexception.html">yii\web\UnsupportedMediaTypeHttpException</a></td>
            <td>UnsupportedMediaTypeHttpException represents an "Unsupported Media Type" HTTP exception with status code 415</td>
        </tr>
        <tr>
            <td><a href="yii-web-uploadedfile.html">yii\web\UploadedFile</a></td>
            <td>UploadedFile represents the information for an uploaded file.</td>
        </tr>
        <tr>
            <td><a href="yii-web-urlmanager.html">yii\web\UrlManager</a></td>
            <td>UrlManager handles HTTP request parsing and creation of URLs based on a set of rules.</td>
        </tr>
        <tr>
            <td><a href="yii-web-urlnormalizer.html">yii\web\UrlNormalizer</a></td>
            <td>UrlNormalizer normalizes URLs for <a href="yii-web-urlmanager.html">yii\web\UrlManager</a> and <a href="yii-web-urlrule.html">yii\web\UrlRule</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-web-urlnormalizerredirectexception.html">yii\web\UrlNormalizerRedirectException</a></td>
            <td>UrlNormalizerRedirectException represents an information for redirection which should be
                performed during the URL normalization.</td>
        </tr>
        <tr>
            <td><a href="yii-web-urlrule.html">yii\web\UrlRule</a></td>
            <td>UrlRule represents a rule used by <a href="yii-web-urlmanager.html">yii\web\UrlManager</a> for parsing and generating URLs.</td>
        </tr>
        <tr>
            <td><a href="yii-web-urlruleinterface.html">yii\web\UrlRuleInterface</a></td>
            <td>UrlRuleInterface is the interface that should be implemented by URL rule classes.</td>
        </tr>
        <tr>
            <td><a href="yii-web-user.html">yii\web\User</a></td>
            <td>User is the class for the <code>user</code> application component that manages the user authentication status.</td>
        </tr>
        <tr>
            <td><a href="yii-web-userevent.html">yii\web\UserEvent</a></td>
            <td>This event class is used for Events triggered by the <a href="yii-web-user.html">yii\web\User</a> class.</td>
        </tr>
        <tr>
            <td><a href="yii-web-view.html">yii\web\View</a></td>
            <td>View represents a view object in the MVC pattern.</td>
        </tr>
        <tr>
            <td><a href="yii-web-viewaction.html">yii\web\ViewAction</a></td>
            <td>ViewAction represents an action that displays a view according to a user-specified parameter.</td>
        </tr>
        <tr>
            <td><a href="yii-web-xmlresponseformatter.html">yii\web\XmlResponseFormatter</a></td>
            <td>XmlResponseFormatter formats the given data into an XML response content.</td>
        </tr>
        <tr>
            <td><a href="yii-web-yiiasset.html">yii\web\YiiAsset</a></td>
            <td>This asset bundle provides the base JavaScript files for the Yii Framework.</td>
        </tr>
        <tr>
            <td><a href="yii-widgets-activefield.html">yii\widgets\ActiveField</a></td>
            <td>ActiveField represents a form input field within an <a href="yii-widgets-activeform.html">yii\widgets\ActiveForm</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-widgets-activeform.html">yii\widgets\ActiveForm</a></td>
            <td>ActiveForm is a widget that builds an interactive HTML form for one or multiple data models.</td>
        </tr>
        <tr>
            <td><a href="yii-widgets-activeformasset.html">yii\widgets\ActiveFormAsset</a></td>
            <td></td>
        </tr>
        <tr>
            <td><a href="yii-widgets-baselistview.html">yii\widgets\BaseListView</a></td>
            <td>BaseListView is a base class for widgets displaying data from data provider
                such as ListView and GridView.</td>
        </tr>
        <tr>
            <td><a href="yii-widgets-block.html">yii\widgets\Block</a></td>
            <td>Block records all output between <a href="yii-base-widget.html#begin()-detail">begin()</a> and <a href="yii-base-widget.html#end()-detail">end()</a> calls and stores it in <a href="yii-base-view.html#$blocks-detail">yii\base\View::$blocks</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-widgets-breadcrumbs.html">yii\widgets\Breadcrumbs</a></td>
            <td>Breadcrumbs displays a list of links indicating the position of the current page in the whole site hierarchy.</td>
        </tr>
        <tr>
            <td><a href="yii-widgets-contentdecorator.html">yii\widgets\ContentDecorator</a></td>
            <td>ContentDecorator records all output between <a href="yii-base-widget.html#begin()-detail">begin()</a> and <a href="yii-base-widget.html#end()-detail">end()</a> calls, passes it to the given view file
                as <code>$content</code> and then echoes rendering result.</td>
        </tr>
        <tr>
            <td><a href="yii-widgets-detailview.html">yii\widgets\DetailView</a></td>
            <td>DetailView displays the detail of a single data <a href="yii-widgets-detailview.html#$model-detail">$model</a>.</td>
        </tr>
        <tr>
            <td><a href="yii-widgets-fragmentcache.html">yii\widgets\FragmentCache</a></td>
            <td>FragmentCache is used by <a href="yii-base-view.html">yii\base\View</a> to provide caching of page fragments.</td>
        </tr>
        <tr>
            <td><a href="yii-widgets-inputwidget.html">yii\widgets\InputWidget</a></td>
            <td>InputWidget is the base class for widgets that collect user inputs.</td>
        </tr>
        <tr>
            <td><a href="yii-widgets-linkpager.html">yii\widgets\LinkPager</a></td>
            <td>LinkPager displays a list of hyperlinks that lead to different pages of target.</td>
        </tr>
        <tr>
            <td><a href="yii-widgets-linksorter.html">yii\widgets\LinkSorter</a></td>
            <td>LinkSorter renders a list of sort links for the given sort definition.</td>
        </tr>
        <tr>
            <td><a href="yii-widgets-listview.html">yii\widgets\ListView</a></td>
            <td>The ListView widget is used to display data from data
                provider. Each data model is rendered using the view
                specified.</td>
        </tr>
        <tr>
            <td><a href="yii-widgets-maskedinput.html">yii\widgets\MaskedInput</a></td>
            <td>MaskedInput generates a masked text input.</td>
        </tr>
        <tr>
            <td><a href="yii-widgets-maskedinputasset.html">yii\widgets\MaskedInputAsset</a></td>
            <td>The asset bundle for the <a href="yii-widgets-maskedinput.html">yii\widgets\MaskedInput</a> widget.</td>
        </tr>
        <tr>
            <td><a href="yii-widgets-menu.html">yii\widgets\Menu</a></td>
            <td>Menu displays a multi-level menu using nested HTML lists.</td>
        </tr>
        <tr>
            <td><a href="yii-widgets-pjax.html">yii\widgets\Pjax</a></td>
            <td>Pjax is a widget integrating the <a href="https://github.com/yiisoft/jquery-pjax">pjax</a> jQuery plugin.</td>
        </tr>
        <tr>
            <td><a href="yii-widgets-pjaxasset.html">yii\widgets\PjaxAsset</a></td>
            <td>This asset bundle provides the javascript files required by <a href="yii-widgets-pjax.html">yii\widgets\Pjax</a> widget.</td>
        </tr>
        <tr>
            <td><a href="yii-widgets-spaceless.html">yii\widgets\Spaceless</a></td>
            <td>Spaceless widget removes whitespace characters between HTML tags. Whitespaces within HTML tags
                or in a plain text are always left untouched.</td>
        </tr>
    </tbody></table>
