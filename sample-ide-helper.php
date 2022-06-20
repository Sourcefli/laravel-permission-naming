<?php


/**
 *
 * This file will always be different depending on the 'resources' and 'settings' that you've listed in your config.
 * But I love to have that ide assistance, though it takes extra time in the beginning. I love having it.
 * So here's a file that will give you a simple start on ide assistance
 *
 * (create a 'permission_name_helper.php' in the root of your project...then add the following, replacing all methods with your resources/settings)
 */

/** =========================================================================================
 *  Section For 'resources'
 *      - based on the following config:
 *      [
 *          'resources' => [
 *              'user',
 *              'billing'
 *          ],
 *
 *          'settings' => [
 *              'user',
 *              'smtp'
 *          ]
 *      ]
 * ========================================================================================== /



/** =======
 *  This section for the Facade Aliases (in the global namespace)
 *      - each 'resources' listed in your config
 * =======*/

/**
 *
 * @method static \Jhavenz\PermissionName\Adapters\AllPermissionsAdapter setScope(string $scope)
 *
 * @method static \Jhavenz\PermissionName\Adapters\AllPermissionsAdapter setResource(string $resource)
 *
 * @method static \Illuminate\Support\Collection all()
 */
class AllPermissions
{
}

/**
 * @method static \Jhavenz\PermissionName\Adapters\OwnedPermissionsAdapter all()
 */
class OwnedPermission
{
}

/**
 * @method static \Jhavenz\PermissionName\Adapters\TeamPermissionsAdapter all()
 */
class TeamPermission
{
}

/** =======
 *  This section for the Facade Aliases (in the global namespace)
 *      - each 'settings' listed in your config
 * =======*/

/**
 * @method static \Jhavenz\PermissionName\Adapters\OwnedSettingPermissionsAdapter all()
 */
class OwnedSettingPermission
{
}

/**
 * @method static \Jhavenz\PermissionName\Adapters\TeamSettingPermissionsAdapter all()
 */
class TeamSettingPermission
{
}


/** =======
 *  And now the Facades (in the "\Illuminate\Support\Facades\..." namespace)
 *      - each 'resources' listed in your config
 * =======*/

namespace Illuminate\Support\Facades {

    use Jhavenz\PermissionName\Adapters\AllPermissionsAdapter;
    use Jhavenz\PermissionName\Adapters\OwnedPermissionsAdapter;

    /**
     *
     * @method static \Jhavenz\PermissionName\Adapters\AllPermissionsAdapter setScope(string $scope)
     *
     * @method static \Jhavenz\PermissionName\Adapters\AllPermissionsAdapter setResource(string $resource)
     *
     * @method static \Jhavenz\PermissionName\Adapters\AllPermissionsAdapter all()
     *
     */
    class AllPermissions
    {
    }


    /**
     * @method static \Jhavenz\PermissionName\Adapters\OwnedPermissionsAdapter all()
     */
    class OwnedPermission
    {
    }


    /**
     * @method static \Jhavenz\PermissionName\Adapters\TeamPermissionsAdapter all()
     */
    class TeamPermission
    {
    }


    /**
     * @method static \Jhavenz\PermissionName\Adapters\OwnedSettingPermissionsAdapter all()
     */
    class OwnedSettingPermission
    {
    }


    /**
     * @method static \Jhavenz\PermissionName\Adapters\TeamSettingPermissionsAdapter all()
     */
    class TeamSettingPermission
    {
    }
}
