<?xml version="1.0" encoding="utf-8" ?>
<!-- <?php exit(); ?> -->
<scabbia>
	<info>
		<name>surveyAdmin</name>
		<version>1.0.2</version>
		<license>GPLv3</license>
		<phpversion>5.2.0</phpversion>
		<phpdependList />
		<fwversion>1.0</fwversion>
		<fwdependList>
			<fwdepend>string</fwdepend>
			<fwdepend>resources</fwdepend>
			<fwdepend>validation</fwdepend>
			<fwdepend>http</fwdepend>
			<fwdepend>auth</fwdepend>
			<fwdepend>zmodels</fwdepend>
		</fwdependList>
	</info>
	<includeList>
		<include>admin_users.php</include>
		<include>admin_categories.php</include>
		<include>admin_regions.php</include>
		<include>admin_firms.php</include>
		<include>admin_dietTypes.php</include>
		<include>admin_orders.php</include>
		<include>admin_products.php</include>
		<include>admin_productGroups.php</include>
		<include>admin_showcase.php</include>
		<include>admin_reviews.php</include>
		<include>admin_reports.php</include>
		<include>admin_faqs.php</include>
	</includeList>
	<classList>
		<class>admin_users</class>
		<class>admin_categories</class>
		<class>admin_regions</class>
		<class>admin_firms</class>
		<class>admin_dietTypes</class>
		<class>admin_orders</class>
		<class>admin_products</class>
		<class>admin_productGroups</class>
		<class>admin_showcase</class>
		<class>admin_reviews</class>
		<class>admin_reports</class>
		<class>admin_faqs</class>
	</classList>
	<eventList>
		<event>
			<name>blackmore_registerModules</name>
			<callback>admin_users::blackmore_registerModules</callback>
		</event>
		<event>
			<name>blackmore_registerModules</name>
			<callback>admin_categories::blackmore_registerModules</callback>
		</event>
		<event>
			<name>blackmore_registerModules</name>
			<callback>admin_regions::blackmore_registerModules</callback>
		</event>
		<event>
			<name>blackmore_registerModules</name>
			<callback>admin_firms::blackmore_registerModules</callback>
		</event>
		<event>
			<name>blackmore_registerModules</name>
			<callback>admin_dietTypes::blackmore_registerModules</callback>
		</event>
		<event>
			<name>blackmore_registerModules</name>
			<callback>admin_orders::blackmore_registerModules</callback>
		</event>
		<event>
			<name>blackmore_registerModules</name>
			<callback>admin_products::blackmore_registerModules</callback>
		</event>
		<event>
			<name>blackmore_registerModules</name>
			<callback>admin_productGroups::blackmore_registerModules</callback>
		</event>
		<event>
			<name>blackmore_registerModules</name>
			<callback>admin_showcase::blackmore_registerModules</callback>
		</event>
		<event>
			<name>blackmore_registerModules</name>
			<callback>admin_reviews::blackmore_registerModules</callback>
		</event>
		<event>
			<name>blackmore_registerModules</name>
			<callback>admin_reports::blackmore_registerModules</callback>
		</event>
		<event>
			<name>blackmore_registerModules</name>
			<callback>admin_faqs::blackmore_registerModules</callback>
		</event>
	</eventList>
</scabbia>