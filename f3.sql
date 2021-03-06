
-- --------------------------------------------------------

--
-- Table structure for table `search_dataset`
--

CREATE TABLE `search_dataset` (
  `sid` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Search item ID, e.g. node ID for nodes.',
  `langcode` varchar(12) CHARACTER SET ascii NOT NULL DEFAULT '' COMMENT 'The languages.langcode of the item variant.',
  `type` varchar(64) CHARACTER SET ascii NOT NULL COMMENT 'Type of item, e.g. node.',
  `data` longtext NOT NULL COMMENT 'List of space-separated words from the item.',
  `reindex` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Set to force node reindexing.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Stores items that will be searched.';

--
-- Dumping data for table `search_dataset`
--

INSERT INTO `search_dataset` (`sid`, `langcode`, `type`, `data`, `reindex`) VALUES
(1, 'en', 'node_search', ' banner banner root tue 10312017 112  ', 0),
(2, 'en', 'node_search', ' managed stafffing managed stafffing root wed 11012017 6  ', 0),
(3, 'en', 'node_search', ' flexible support flexible support root wed 11012017 10  ', 0),
(4, 'en', 'node_search', ' managed projects managed projects root wed 11012017 12  ', 0),
(6, 'en', 'node_search', ' devops engineering devops engineering root wed 11012017 212 our engineers help reduce delivery cycles enhancing software and competitiveness  ', 0),
(7, 'en', 'node_search', ' cms solutions cms solutions root wed 11012017 213 we ve handled hundreds of content management system projects since 2005  ', 0),
(8, 'en', 'node_search', ' quality assurance quality assurance root wed 11012017 214 with qa services teams can focus on other work and leave testing to specialists  ', 0),
(9, 'en', 'node_search', ' redhat axelerant redhat axelerant root wed 11012017 239 supporting the leading provider of open source solutions red hat faced internal staffing bandwidth and talent sourcing challenges they turned to us  ', 0),
(10, 'en', 'node_search', ' axelerant partnership axelerant partnership root wed 11012017 241 how we forged the ffw partnership on quality we forged the relationship on qa by demonstrating staffing success  ', 0),
(11, 'en', 'node_search', ' axelerant facet axelerant facet root wed 11012017 242 how we fuel growth for facet interactive how we fuel agency growth for facet interactive by extending capabilities while driving overhead costs down  ', 0),
(12, 'en', 'node_search', ' axelerant continuous support axelerant continuous support root wed 11012017 243 continuous support for networking platform we launched and continuously support synduit s robust network marketing platform  ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `search_index`
--

CREATE TABLE `search_index` (
  `word` varchar(50) NOT NULL DEFAULT '' COMMENT 'The search_total.word that is associated with the search item.',
  `sid` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'The search_dataset.sid of the searchable item to which the word belongs.',
  `langcode` varchar(12) CHARACTER SET ascii NOT NULL DEFAULT '' COMMENT 'The languages.langcode of the item variant.',
  `type` varchar(64) CHARACTER SET ascii NOT NULL COMMENT 'The search_dataset.type of the searchable item to which the word belongs.',
  `score` float DEFAULT NULL COMMENT 'The numeric score of the word, higher being more important.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Stores the search index, associating words, items and…';

--
-- Dumping data for table `search_index`
--

INSERT INTO `search_index` (`word`, `sid`, `langcode`, `type`, `score`) VALUES
('10', 3, 'en', 'node_search', 1),
('10312017', 1, 'en', 'node_search', 1),
('11012017', 2, 'en', 'node_search', 1),
('11012017', 3, 'en', 'node_search', 1),
('11012017', 4, 'en', 'node_search', 1),
('11012017', 6, 'en', 'node_search', 1),
('11012017', 7, 'en', 'node_search', 1),
('11012017', 8, 'en', 'node_search', 1),
('11012017', 9, 'en', 'node_search', 1),
('11012017', 10, 'en', 'node_search', 1),
('11012017', 11, 'en', 'node_search', 1),
('11012017', 12, 'en', 'node_search', 1),
('112', 1, 'en', 'node_search', 1),
('12', 4, 'en', 'node_search', 1),
('2005', 7, 'en', 'node_search', 1),
('212', 6, 'en', 'node_search', 1),
('213', 7, 'en', 'node_search', 1),
('214', 8, 'en', 'node_search', 1),
('239', 9, 'en', 'node_search', 1),
('241', 10, 'en', 'node_search', 1),
('242', 11, 'en', 'node_search', 1),
('243', 12, 'en', 'node_search', 1),
('6', 2, 'en', 'node_search', 1),
('agency', 11, 'en', 'node_search', 1),
('and', 6, 'en', 'node_search', 1),
('and', 8, 'en', 'node_search', 1),
('and', 9, 'en', 'node_search', 1),
('and', 12, 'en', 'node_search', 1),
('assurance', 8, 'en', 'node_search', 27),
('axelerant', 9, 'en', 'node_search', 27),
('axelerant', 10, 'en', 'node_search', 27),
('axelerant', 11, 'en', 'node_search', 27),
('axelerant', 12, 'en', 'node_search', 27),
('bandwidth', 9, 'en', 'node_search', 1),
('banner', 1, 'en', 'node_search', 27),
('can', 8, 'en', 'node_search', 1),
('capabilities', 11, 'en', 'node_search', 1),
('challenges', 9, 'en', 'node_search', 1),
('cms', 7, 'en', 'node_search', 27),
('competitiveness', 6, 'en', 'node_search', 1),
('content', 7, 'en', 'node_search', 1),
('continuous', 12, 'en', 'node_search', 28),
('continuously', 12, 'en', 'node_search', 1),
('costs', 11, 'en', 'node_search', 1),
('cycles', 6, 'en', 'node_search', 1),
('delivery', 6, 'en', 'node_search', 1),
('demonstrating', 10, 'en', 'node_search', 1),
('devops', 6, 'en', 'node_search', 27),
('down', 11, 'en', 'node_search', 1),
('driving', 11, 'en', 'node_search', 1),
('engineering', 6, 'en', 'node_search', 27),
('engineers', 6, 'en', 'node_search', 1),
('enhancing', 6, 'en', 'node_search', 1),
('extending', 11, 'en', 'node_search', 1),
('faced', 9, 'en', 'node_search', 1),
('facet', 11, 'en', 'node_search', 29),
('ffw', 10, 'en', 'node_search', 1),
('flexible', 3, 'en', 'node_search', 27),
('focus', 8, 'en', 'node_search', 1),
('for', 11, 'en', 'node_search', 2),
('for', 12, 'en', 'node_search', 1),
('forged', 10, 'en', 'node_search', 2),
('fuel', 11, 'en', 'node_search', 2),
('growth', 11, 'en', 'node_search', 2),
('handled', 7, 'en', 'node_search', 1),
('hat', 9, 'en', 'node_search', 1),
('help', 6, 'en', 'node_search', 1),
('how', 10, 'en', 'node_search', 1),
('how', 11, 'en', 'node_search', 2),
('hundreds', 7, 'en', 'node_search', 1),
('interactive', 11, 'en', 'node_search', 2),
('internal', 9, 'en', 'node_search', 1),
('launched', 12, 'en', 'node_search', 1),
('leading', 9, 'en', 'node_search', 1),
('leave', 8, 'en', 'node_search', 1),
('managed', 2, 'en', 'node_search', 27),
('managed', 4, 'en', 'node_search', 27),
('management', 7, 'en', 'node_search', 1),
('marketing', 12, 'en', 'node_search', 1),
('network', 12, 'en', 'node_search', 1),
('networking', 12, 'en', 'node_search', 1),
('open', 9, 'en', 'node_search', 1),
('other', 8, 'en', 'node_search', 1),
('our', 6, 'en', 'node_search', 1),
('overhead', 11, 'en', 'node_search', 1),
('partnership', 10, 'en', 'node_search', 28),
('platform', 12, 'en', 'node_search', 2),
('projects', 4, 'en', 'node_search', 27),
('projects', 7, 'en', 'node_search', 1),
('provider', 9, 'en', 'node_search', 1),
('quality', 8, 'en', 'node_search', 27),
('quality', 10, 'en', 'node_search', 1),
('red', 9, 'en', 'node_search', 1),
('redhat', 9, 'en', 'node_search', 27),
('reduce', 6, 'en', 'node_search', 1),
('relationship', 10, 'en', 'node_search', 1),
('robust', 12, 'en', 'node_search', 1),
('root', 1, 'en', 'node_search', 1),
('root', 2, 'en', 'node_search', 1),
('root', 3, 'en', 'node_search', 1),
('root', 4, 'en', 'node_search', 1),
('root', 6, 'en', 'node_search', 1),
('root', 7, 'en', 'node_search', 1),
('root', 8, 'en', 'node_search', 1),
('root', 9, 'en', 'node_search', 1),
('root', 10, 'en', 'node_search', 1),
('root', 11, 'en', 'node_search', 1),
('root', 12, 'en', 'node_search', 1),
('services', 8, 'en', 'node_search', 1),
('since', 7, 'en', 'node_search', 1),
('software', 6, 'en', 'node_search', 1),
('solutions', 7, 'en', 'node_search', 27),
('solutions', 9, 'en', 'node_search', 1),
('source', 9, 'en', 'node_search', 1),
('sourcing', 9, 'en', 'node_search', 1),
('specialists', 8, 'en', 'node_search', 1),
('stafffing', 2, 'en', 'node_search', 27),
('staffing', 9, 'en', 'node_search', 1),
('staffing', 10, 'en', 'node_search', 1),
('success', 10, 'en', 'node_search', 1),
('support', 3, 'en', 'node_search', 27),
('support', 12, 'en', 'node_search', 29),
('supporting', 9, 'en', 'node_search', 1),
('synduit', 12, 'en', 'node_search', 1),
('system', 7, 'en', 'node_search', 1),
('talent', 9, 'en', 'node_search', 1),
('teams', 8, 'en', 'node_search', 1),
('testing', 8, 'en', 'node_search', 1),
('the', 9, 'en', 'node_search', 1),
('the', 10, 'en', 'node_search', 2),
('they', 9, 'en', 'node_search', 1),
('tue', 1, 'en', 'node_search', 1),
('turned', 9, 'en', 'node_search', 1),
('wed', 2, 'en', 'node_search', 1),
('wed', 3, 'en', 'node_search', 1),
('wed', 4, 'en', 'node_search', 1),
('wed', 6, 'en', 'node_search', 1),
('wed', 7, 'en', 'node_search', 1),
('wed', 8, 'en', 'node_search', 1),
('wed', 9, 'en', 'node_search', 1),
('wed', 10, 'en', 'node_search', 1),
('wed', 11, 'en', 'node_search', 1),
('wed', 12, 'en', 'node_search', 1),
('while', 11, 'en', 'node_search', 1),
('with', 8, 'en', 'node_search', 1),
('work', 8, 'en', 'node_search', 1);

-- --------------------------------------------------------

--
-- Table structure for table `search_total`
--

CREATE TABLE `search_total` (
  `word` varchar(50) NOT NULL DEFAULT '' COMMENT 'Primary Key: Unique word in the search index.',
  `count` float DEFAULT NULL COMMENT 'The count of the word in the index using Zipf''s law to equalize the probability distribution.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Stores search totals for words.';

--
-- Dumping data for table `search_total`
--

INSERT INTO `search_total` (`word`, `count`) VALUES
('10', 0.30103),
('10312017', 0.30103),
('11012017', 0.0413927),
('112', 0.30103),
('12', 0.30103),
('2005', 0.30103),
('212', 0.30103),
('213', 0.30103),
('214', 0.30103),
('239', 0.30103),
('241', 0.30103),
('242', 0.30103),
('243', 0.30103),
('6', 0.30103),
('agency', 0.30103),
('and', 0.09691),
('assurance', 0.0157943),
('axelerant', 0.00400274),
('bandwidth', 0.30103),
('banner', 0.0157943),
('can', 0.30103),
('capabilities', 0.30103),
('challenges', 0.30103),
('cms', 0.0157943),
('competitiveness', 0.30103),
('content', 0.30103),
('continuous', 0.01524),
('continuously', 0.30103),
('costs', 0.30103),
('cycles', 0.30103),
('delivery', 0.30103),
('demonstrating', 0.30103),
('devops', 0.0157943),
('down', 0.30103),
('driving', 0.30103),
('engineering', 0.0157943),
('engineers', 0.30103),
('enhancing', 0.30103),
('extending', 0.30103),
('faced', 0.30103),
('facet', 0.0147233),
('ffw', 0.30103),
('flexible', 0.0157943),
('focus', 0.30103),
('for', 0.124939),
('forged', 0.176091),
('fuel', 0.176091),
('growth', 0.176091),
('handled', 0.30103),
('hat', 0.30103),
('help', 0.30103),
('how', 0.124939),
('hundreds', 0.30103),
('interactive', 0.176091),
('internal', 0.30103),
('launched', 0.30103),
('leading', 0.30103),
('leave', 0.30103),
('managed', 0.00796893),
('management', 0.30103),
('marketing', 0.30103),
('network', 0.30103),
('networking', 0.30103),
('open', 0.30103),
('other', 0.30103),
('our', 0.30103),
('overhead', 0.30103),
('partnership', 0.01524),
('platform', 0.176091),
('projects', 0.01524),
('provider', 0.30103),
('quality', 0.01524),
('red', 0.30103),
('redhat', 0.0157943),
('reduce', 0.30103),
('relationship', 0.30103),
('robust', 0.30103),
('root', 0.0377886),
('services', 0.30103),
('since', 0.30103),
('software', 0.30103),
('solutions', 0.01524),
('source', 0.30103),
('sourcing', 0.30103),
('specialists', 0.30103),
('stafffing', 0.0157943),
('staffing', 0.176091),
('success', 0.30103),
('support', 0.00768683),
('supporting', 0.30103),
('synduit', 0.30103),
('system', 0.30103),
('talent', 0.30103),
('teams', 0.30103),
('testing', 0.30103),
('the', 0.124939),
('they', 0.30103),
('tue', 0.30103),
('turned', 0.30103),
('wed', 0.0413927),
('while', 0.30103),
('with', 0.30103),
('work', 0.30103);
