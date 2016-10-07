<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/js/compiled/main')) {
            // _assetic_cccbafd
            if ($pathinfo === '/js/compiled/main.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'cccbafd',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_cccbafd',);
            }

            // _assetic_cccbafd_0
            if ($pathinfo === '/js/compiled/main_part_1_AppBundle_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'cccbafd',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_cccbafd_0',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // locale
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'locale');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\WebController::indexAction',  '_route' => 'locale',);
        }

        // sendActivationLink
        if (preg_match('#^/(?P<_locale>en|es)/email/sendActivationLink$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sendActivationLink')), array (  '_controller' => 'AppBundle\\Controller\\EmailController::sendActivationLink',));
        }

        // sendPasswordResetLink
        if (preg_match('#^/(?P<_locale>en|es)/email/sendPasswordResetLink$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sendPasswordResetLink')), array (  '_controller' => 'AppBundle\\Controller\\EmailController::sendPasswordResetLink',));
        }

        // searchClub
        if (preg_match('#^/(?P<_locale>en|es)/club/search$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'searchClub')), array (  '_controller' => 'AppBundle\\Controller\\ClubController::searchClubAction',));
        }

        // viewClub
        if (preg_match('#^/(?P<_locale>en|es)/club/view(?:/(?P<clubId>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'viewClub')), array (  'clubId' => '0',  '_controller' => 'AppBundle\\Controller\\ClubController::viewClubAction',));
        }

        // clubSettings
        if (preg_match('#^/(?P<_locale>en|es)/club/settings$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'clubSettings')), array (  '_controller' => 'AppBundle\\Controller\\ClubController::clubSettings',));
        }

        // registerClub
        if (preg_match('#^/(?P<_locale>en|es)/club/register(?:/(?P<clubId>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'registerClub')), array (  'clubId' => '0',  '_controller' => 'AppBundle\\Controller\\ClubController::registerClub',));
        }

        // clubAjaxEdit
        if (preg_match('#^/(?P<_locale>en|es)/club/ajaxEdit/(?P<clubId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'clubAjaxEdit')), array (  '_controller' => 'AppBundle\\Controller\\ClubController::clubAjaxEditAction',));
        }

        // clubAjaxCancel
        if (preg_match('#^/(?P<_locale>en|es)/club/ajaxCancel/(?P<clubId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'clubAjaxCancel')), array (  '_controller' => 'AppBundle\\Controller\\ClubController::clubAjaxCancelAction',));
        }

        // searchPlayer
        if (preg_match('#^/(?P<_locale>en|es)/player/search$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'searchPlayer')), array (  '_controller' => 'AppBundle\\Controller\\PlayerController::searchPlayerAction',));
        }

        // viewPlayer
        if (preg_match('#^/(?P<_locale>en|es)/player/view(?:/(?P<playerId>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'viewPlayer')), array (  'playerId' => '0',  '_controller' => 'AppBundle\\Controller\\PlayerController::viewPlayer',));
        }

        // playerFriend
        if (preg_match('#^/(?P<_locale>en|es)/player/ajaxFriend(?:/(?P<friendId>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'playerFriend')), array (  'friendId' => '0',  '_controller' => 'AppBundle\\Controller\\PlayerController::playerFriend',));
        }

        // addDummyPlayer
        if (preg_match('#^/(?P<_locale>en|es)/player/addDummyPlayer/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'addDummyPlayer');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addDummyPlayer')), array (  '_controller' => 'AppBundle\\Controller\\PlayerController::addDummyPlayer',));
        }

        // viewDummyPlayer
        if (preg_match('#^/(?P<_locale>en|es)/player/viewDummyPlayer/(?P<dummyId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'viewDummyPlayer')), array (  '_controller' => 'AppBundle\\Controller\\PlayerController::viewDummyPlayer',));
        }

        // ajaxEditDummyPlayer
        if (preg_match('#^/(?P<_locale>en|es)/player/ajaxEditDummyPlayer/(?P<dummyId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajaxEditDummyPlayer')), array (  '_controller' => 'AppBundle\\Controller\\PlayerController::ajaxEditDummyPlayer',));
        }

        // ajaxCancelDummyPlayer
        if (preg_match('#^/(?P<_locale>en|es)/club/ajaxCancelDummyPlayer/(?P<dummyId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajaxCancelDummyPlayer')), array (  '_controller' => 'AppBundle\\Controller\\PlayerController::ajaxCancelDummyPlayer',));
        }

        // login
        if (preg_match('#^/(?P<_locale>en|es)/public/login$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'login')), array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',));
        }

        // login_check
        if (preg_match('#^/(?P<_locale>en|es)/web/login_check$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'login_check')), array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginCheck',));
        }

        // logout
        if (preg_match('#^/(?P<_locale>en|es)/web/logout$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'logout')), array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logout',));
        }

        // postLogin
        if (preg_match('#^/(?P<_locale>en|es)/web/postLogin$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'postLogin')), array (  '_controller' => 'AppBundle\\Controller\\SecurityController::postLogin',));
        }

        // activateAccount
        if (preg_match('#^/(?P<_locale>en|es)/public/activateAccount/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'activateAccount')), array (  '_controller' => 'AppBundle\\Controller\\SecurityController::activateAccount',));
        }

        // resetPassword
        if (preg_match('#^/(?P<_locale>en|es)/public/resetPassword/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'resetPassword')), array (  '_controller' => 'AppBundle\\Controller\\SecurityController::resetPassword',));
        }

        // resetPasswordPage
        if (preg_match('#^/(?P<_locale>en|es)/public/resetPasswordPage$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'resetPasswordPage')), array (  '_controller' => 'AppBundle\\Controller\\SecurityController::resetPasswordPage',));
        }

        // forgotPassword
        if (preg_match('#^/(?P<_locale>en|es)/public/forgotPassword$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'forgotPassword')), array (  '_controller' => 'AppBundle\\Controller\\SecurityController::forgotPassword',));
        }

        // newTournament
        if (preg_match('#^/(?P<_locale>en|es)/tournament/newTournament$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newTournament')), array (  '_controller' => 'AppBundle\\Controller\\TournamentController::newTournament',));
        }

        // viewTournament
        if (preg_match('#^/(?P<_locale>en|es)/tournament/viewTournament/(?P<tournamentId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'viewTournament')), array (  '_controller' => 'AppBundle\\Controller\\TournamentController::viewTournament',));
        }

        // searchTournament
        if (preg_match('#^/(?P<_locale>en|es)/tournament/searchTournament$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'searchTournament')), array (  '_controller' => 'AppBundle\\Controller\\TournamentController::searchTournament',));
        }

        // registerUser
        if (preg_match('#^/(?P<_locale>en|es)/public/registerUser$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'registerUser')), array (  '_controller' => 'AppBundle\\Controller\\UserController::registerUserAction',));
        }

        // account
        if (preg_match('#^/(?P<_locale>en|es)/user/account$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'account')), array (  '_controller' => 'AppBundle\\Controller\\UserController::account',));
        }

        // search
        if (preg_match('#^/(?P<_locale>en|es)/web/search$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'search')), array (  '_controller' => 'AppBundle\\Controller\\UserController::searchAction',));
        }

        // ajaxEdit
        if (preg_match('#^/(?P<_locale>en|es)/user/ajaxEdit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajaxEdit')), array (  '_controller' => 'AppBundle\\Controller\\UserController::ajaxEditAction',));
        }

        // ajaxCancel
        if (preg_match('#^/(?P<_locale>en|es)/user/ajaxCancel$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajaxCancel')), array (  '_controller' => 'AppBundle\\Controller\\UserController::ajaxCancelAction',));
        }

        // index
        if (preg_match('#^/(?P<_locale>en|es)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'index')), array (  '_controller' => 'AppBundle\\Controller\\WebController::indexAction',));
        }

        // home
        if (preg_match('#^/(?P<_locale>en|es)/web/home$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home')), array (  '_controller' => 'AppBundle\\Controller\\WebController::homeAction',));
        }

        // matches
        if (preg_match('#^/(?P<_locale>en|es)/web/matches$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'matches')), array (  '_controller' => 'AppBundle\\Controller\\WebController::matches',));
        }

        // tournaments
        if (preg_match('#^/(?P<_locale>en|es)/web/tournaments$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tournaments')), array (  '_controller' => 'AppBundle\\Controller\\WebController::tournaments',));
        }

        // clubs
        if (preg_match('#^/(?P<_locale>en|es)/web/clubs$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'clubs')), array (  '_controller' => 'AppBundle\\Controller\\WebController::clubs',));
        }

        // players
        if (preg_match('#^/(?P<_locale>en|es)/web/players$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'players')), array (  '_controller' => 'AppBundle\\Controller\\WebController::players',));
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        // ajaxUserEdit
        if (preg_match('#^/(?P<_locale>[^/]++)/user/ajaxEdit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajaxUserEdit')), array (  '_controller' => 'AppBundle\\Controller\\UserController::ajaxEditAction',));
        }

        // ajaxUserCancel
        if (preg_match('#^/(?P<_locale>[^/]++)/user/ajaxCancel$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajaxUserCancel')), array (  '_controller' => 'AppBundle\\Controller\\UserController::ajaxCancelAction',));
        }

        // ajaxClubFav
        if (preg_match('#^/(?P<_locale>[^/]++)/user/ajaxClubFav/(?P<clubId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajaxClubFav')), array (  '_controller' => 'AppBundle\\Controller\\UserController::ajaxClubFavAction',));
        }

        // ajaxRemoveFavClub
        if (preg_match('#^/(?P<_locale>[^/]++)/user/ajaxRemoveFavClub/(?P<clubId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajaxRemoveFavClub')), array (  '_controller' => 'AppBundle\\Controller\\UserController::ajaxRemoveFavClubAction',));
        }

        // ajaxClubEdit
        if (preg_match('#^/(?P<_locale>[^/]++)/club/ajaxEdit/(?P<clubId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajaxClubEdit')), array (  '_controller' => 'AppBundle\\Controller\\ClubController::clubAjaxEditAction',));
        }

        // ajaxClubCancel
        if (preg_match('#^/(?P<_locale>[^/]++)/club/ajaxCancel/(?P<clubId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajaxClubCancel')), array (  '_controller' => 'AppBundle\\Controller\\ClubController::clubAjaxCancelAction',));
        }

        // ajaxFriend
        if (preg_match('#^/(?P<_locale>[^/]++)/player/ajaxFriend/(?P<playerId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajaxFriend')), array (  '_controller' => 'AppBundle\\Controller\\PlayerController::playerFriendAction',));
        }

        // ajaxRemoveFriend
        if (preg_match('#^/(?P<_locale>[^/]++)/player/ajaxRemoveFriend/(?P<friendId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajaxRemoveFriend')), array (  '_controller' => 'AppBundle\\Controller\\PlayerController::ajaxRemoveFriendAction',));
        }

        // ajaxEditDummy
        if (preg_match('#^/(?P<_locale>[^/]++)/player/ajaxEditDummyPlayer/(?P<dummyId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajaxEditDummy')), array (  '_controller' => 'AppBundle\\Controller\\PlayerController::ajaxEditDummyPlayerAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
