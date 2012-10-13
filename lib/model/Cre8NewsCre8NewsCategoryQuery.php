<?php


/**
 * Skeleton subclass for performing query and update operations on the 'cre8_news_cre8_news_category' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * czw, 18 lut 2010, 17:03:15
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.plugins.cre8PropelNewsPlugin.lib.model
 */
class Cre8NewsCre8NewsCategoryQuery extends BaseCre8NewsCre8NewsCategoryQuery {

	/**
	 * Returns a new Cre8NewsCre8NewsCategoryQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Cre8NewsCre8NewsCategoryQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Cre8NewsCre8NewsCategoryQuery) {
			return $criteria;
		}
		$query = new self('propel', 'Cre8NewsCre8NewsCategory', $modelAlias);
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

} // Cre8NewsCre8NewsCategoryQuery