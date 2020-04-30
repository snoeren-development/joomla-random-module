<?php
declare(strict_types = 1);

use Joomla\CMS\MVC\Model\BaseDatabaseModel;

class RandomModuleModel extends BaseDatabaseModel
{
    /**
     * Get a list of all module id's.
     *
     * @return array
     */
    public function getAll(): array
    {
        $db = $this->getDbo();
        $query = $db->getQuery(true)
            ->select($db->qn('id'))
            ->from($db->qn('#__modules'))
            ->where([
                $db->qn('client_id') . ' = 0',
                $db->qn('published') . ' = 1',
                $db->qn('module') . ' != ' . $db->q('mod_randommodule'),
            ]);

        return array_map(
            'intval',
            (array) $db
                ->setQuery($query)
                ->loadColumn()
        );
    }
}
