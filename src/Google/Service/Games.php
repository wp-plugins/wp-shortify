<?php
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for Games (v1).
 *
 * <p>
 * The API for Google Play Game Services.
 * </p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/games/services/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Shortify_WP_Google_Service_Games extends Shortify_WP_Google_Service
{
  /** View and manage its own configuration data in your Google Drive. */
  const DRIVE_APPDATA = "https://www.googleapis.com/auth/drive.appdata";
  /** Share your Google+ profile information and view and manage your game activity. */
  const GAMES = "https://www.googleapis.com/auth/games";
  /** Know your basic profile info and list of people in your circles.. */
  const PLUS_LOGIN = "https://www.googleapis.com/auth/plus.login";

  public $achievementDefinitions;
  public $achievements;
  public $applications;
  public $events;
  public $leaderboards;
  public $metagame;
  public $players;
  public $pushtokens;
  public $questMilestones;
  public $quests;
  public $revisions;
  public $rooms;
  public $scores;
  public $snapshots;
  public $turnBasedMatches;
  

  /**
   * Constructs the internal representation of the Games service.
   *
   * @param Shortify_WP_Google_Client $client
   */
  public function __construct(Shortify_WP_Google_Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'games/v1/';
    $this->version = 'v1';
    $this->serviceName = 'games';

    $this->achievementDefinitions = new Shortify_WP_Google_Service_Games_AchievementDefinitions_Resource(
        $this,
        $this->serviceName,
        'achievementDefinitions',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'achievements',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->achievements = new Shortify_WP_Google_Service_Games_Achievements_Resource(
        $this,
        $this->serviceName,
        'achievements',
        array(
          'methods' => array(
            'increment' => array(
              'path' => 'achievements/{achievementId}/increment',
              'httpMethod' => 'POST',
              'parameters' => array(
                'achievementId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'stepsToIncrement' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
                'requestId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'players/{playerId}/achievements',
              'httpMethod' => 'GET',
              'parameters' => array(
                'playerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'state' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'reveal' => array(
              'path' => 'achievements/{achievementId}/reveal',
              'httpMethod' => 'POST',
              'parameters' => array(
                'achievementId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'setStepsAtLeast' => array(
              'path' => 'achievements/{achievementId}/setStepsAtLeast',
              'httpMethod' => 'POST',
              'parameters' => array(
                'achievementId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'steps' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'unlock' => array(
              'path' => 'achievements/{achievementId}/unlock',
              'httpMethod' => 'POST',
              'parameters' => array(
                'achievementId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'updateMultiple' => array(
              'path' => 'achievements/updateMultiple',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->applications = new Shortify_WP_Google_Service_Games_Applications_Resource(
        $this,
        $this->serviceName,
        'applications',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'applications/{applicationId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'applicationId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'platformType' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'played' => array(
              'path' => 'applications/played',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->events = new Shortify_WP_Google_Service_Games_Events_Resource(
        $this,
        $this->serviceName,
        'events',
        array(
          'methods' => array(
            'listByPlayer' => array(
              'path' => 'events',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'listDefinitions' => array(
              'path' => 'eventDefinitions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'record' => array(
              'path' => 'events',
              'httpMethod' => 'POST',
              'parameters' => array(
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->leaderboards = new Shortify_WP_Google_Service_Games_Leaderboards_Resource(
        $this,
        $this->serviceName,
        'leaderboards',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'leaderboards/{leaderboardId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'leaderboardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'leaderboards',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->metagame = new Shortify_WP_Google_Service_Games_Metagame_Resource(
        $this,
        $this->serviceName,
        'metagame',
        array(
          'methods' => array(
            'getMetagameConfig' => array(
              'path' => 'metagameConfig',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),'listCategoriesByPlayer' => array(
              'path' => 'players/{playerId}/categories/{collection}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'playerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'collection' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->players = new Shortify_WP_Google_Service_Games_Players_Resource(
        $this,
        $this->serviceName,
        'players',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'players/{playerId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'playerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'players/me/players/{collection}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'collection' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->pushtokens = new Shortify_WP_Google_Service_Games_Pushtokens_Resource(
        $this,
        $this->serviceName,
        'pushtokens',
        array(
          'methods' => array(
            'remove' => array(
              'path' => 'pushtokens/remove',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'update' => array(
              'path' => 'pushtokens',
              'httpMethod' => 'PUT',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->questMilestones = new Shortify_WP_Google_Service_Games_QuestMilestones_Resource(
        $this,
        $this->serviceName,
        'questMilestones',
        array(
          'methods' => array(
            'claim' => array(
              'path' => 'quests/{questId}/milestones/{milestoneId}/claim',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'questId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'milestoneId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'requestId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->quests = new Shortify_WP_Google_Service_Games_Quests_Resource(
        $this,
        $this->serviceName,
        'quests',
        array(
          'methods' => array(
            'accept' => array(
              'path' => 'quests/{questId}/accept',
              'httpMethod' => 'POST',
              'parameters' => array(
                'questId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'players/{playerId}/quests',
              'httpMethod' => 'GET',
              'parameters' => array(
                'playerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->revisions = new Shortify_WP_Google_Service_Games_Revisions_Resource(
        $this,
        $this->serviceName,
        'revisions',
        array(
          'methods' => array(
            'check' => array(
              'path' => 'revisions/check',
              'httpMethod' => 'GET',
              'parameters' => array(
                'clientRevision' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->rooms = new Shortify_WP_Google_Service_Games_Rooms_Resource(
        $this,
        $this->serviceName,
        'rooms',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'rooms/create',
              'httpMethod' => 'POST',
              'parameters' => array(
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'decline' => array(
              'path' => 'rooms/{roomId}/decline',
              'httpMethod' => 'POST',
              'parameters' => array(
                'roomId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'dismiss' => array(
              'path' => 'rooms/{roomId}/dismiss',
              'httpMethod' => 'POST',
              'parameters' => array(
                'roomId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'rooms/{roomId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'roomId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'join' => array(
              'path' => 'rooms/{roomId}/join',
              'httpMethod' => 'POST',
              'parameters' => array(
                'roomId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'leave' => array(
              'path' => 'rooms/{roomId}/leave',
              'httpMethod' => 'POST',
              'parameters' => array(
                'roomId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'rooms',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'reportStatus' => array(
              'path' => 'rooms/{roomId}/reportstatus',
              'httpMethod' => 'POST',
              'parameters' => array(
                'roomId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->scores = new Shortify_WP_Google_Service_Games_Scores_Resource(
        $this,
        $this->serviceName,
        'scores',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'players/{playerId}/leaderboards/{leaderboardId}/scores/{timeSpan}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'playerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'leaderboardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'timeSpan' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'includeRankType' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'leaderboards/{leaderboardId}/scores/{collection}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'leaderboardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'collection' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'timeSpan' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'listWindow' => array(
              'path' => 'leaderboards/{leaderboardId}/window/{collection}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'leaderboardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'collection' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'timeSpan' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'returnTopIfAbsent' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'resultsAbove' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'submit' => array(
              'path' => 'leaderboards/{leaderboardId}/scores',
              'httpMethod' => 'POST',
              'parameters' => array(
                'leaderboardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'score' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'scoreTag' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'submitMultiple' => array(
              'path' => 'leaderboards/scores',
              'httpMethod' => 'POST',
              'parameters' => array(
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->snapshots = new Shortify_WP_Google_Service_Games_Snapshots_Resource(
        $this,
        $this->serviceName,
        'snapshots',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'snapshots/{snapshotId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'snapshotId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'players/{playerId}/snapshots',
              'httpMethod' => 'GET',
              'parameters' => array(
                'playerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->turnBasedMatches = new Shortify_WP_Google_Service_Games_TurnBasedMatches_Resource(
        $this,
        $this->serviceName,
        'turnBasedMatches',
        array(
          'methods' => array(
            'cancel' => array(
              'path' => 'turnbasedmatches/{matchId}/cancel',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'create' => array(
              'path' => 'turnbasedmatches/create',
              'httpMethod' => 'POST',
              'parameters' => array(
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'decline' => array(
              'path' => 'turnbasedmatches/{matchId}/decline',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'dismiss' => array(
              'path' => 'turnbasedmatches/{matchId}/dismiss',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'finish' => array(
              'path' => 'turnbasedmatches/{matchId}/finish',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'get' => array(
              'path' => 'turnbasedmatches/{matchId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'includeMatchData' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'join' => array(
              'path' => 'turnbasedmatches/{matchId}/join',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'leave' => array(
              'path' => 'turnbasedmatches/{matchId}/leave',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'leaveTurn' => array(
              'path' => 'turnbasedmatches/{matchId}/leaveTurn',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'matchVersion' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pendingParticipantId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'turnbasedmatches',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxCompletedMatches' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'includeMatchData' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'rematch' => array(
              'path' => 'turnbasedmatches/{matchId}/rematch',
              'httpMethod' => 'POST',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'requestId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'sync' => array(
              'path' => 'turnbasedmatches/sync',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxCompletedMatches' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'includeMatchData' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'takeTurn' => array(
              'path' => 'turnbasedmatches/{matchId}/turn',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
  }
}


/**
 * The "achievementDefinitions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Shortify_WP_Google_Service_Games(...);
 *   $achievementDefinitions = $gamesService->achievementDefinitions;
 *  </code>
 */
class Shortify_WP_Google_Service_Games_AchievementDefinitions_Resource extends Shortify_WP_Google_Service_Resource
{

  /**
   * Lists all the achievement definitions for your application.
   * (achievementDefinitions.listAchievementDefinitions)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The token returned by the previous request.
   * @opt_param int maxResults
   * The maximum number of achievement resources to return in the response, used for paging. For any
    * response, the actual number of achievement resources returned may be less than the specified
    * maxResults.
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_AchievementDefinitionsListResponse
   */
  public function listAchievementDefinitions($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Shortify_WP_Google_Service_Games_AchievementDefinitionsListResponse");
  }
}

/**
 * The "achievements" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Shortify_WP_Google_Service_Games(...);
 *   $achievements = $gamesService->achievements;
 *  </code>
 */
class Shortify_WP_Google_Service_Games_Achievements_Resource extends Shortify_WP_Google_Service_Resource
{

  /**
   * Increments the steps of the achievement with the given ID for the currently
   * authenticated player. (achievements.increment)
   *
   * @param string $achievementId
   * The ID of the achievement used by this method.
   * @param int $stepsToIncrement
   * The number of steps to increment.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId
   * A randomly generated numeric ID for each request specified by the caller. This number is used at
    * the server to ensure that the request is handled correctly across retries.
   * @return Shortify_WP_Google_Service_Games_AchievementIncrementResponse
   */
  public function increment($achievementId, $stepsToIncrement, $optParams = array())
  {
    $params = array('achievementId' => $achievementId, 'stepsToIncrement' => $stepsToIncrement);
    $params = array_merge($params, $optParams);
    return $this->call('increment', array($params), "Shortify_WP_Google_Service_Games_AchievementIncrementResponse");
  }
  /**
   * Lists the progress for all your application's achievements for the currently
   * authenticated player. (achievements.listAchievements)
   *
   * @param string $playerId
   * A player ID. A value of me may be used in place of the authenticated player's ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The token returned by the previous request.
   * @opt_param string state
   * Tells the server to return only achievements with the specified state. If this parameter isn't
    * specified, all achievements are returned.
   * @opt_param int maxResults
   * The maximum number of achievement resources to return in the response, used for paging. For any
    * response, the actual number of achievement resources returned may be less than the specified
    * maxResults.
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_PlayerAchievementListResponse
   */
  public function listAchievements($playerId, $optParams = array())
  {
    $params = array('playerId' => $playerId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Shortify_WP_Google_Service_Games_PlayerAchievementListResponse");
  }
  /**
   * Sets the state of the achievement with the given ID to REVEALED for the
   * currently authenticated player. (achievements.reveal)
   *
   * @param string $achievementId
   * The ID of the achievement used by this method.
   * @param array $optParams Optional parameters.
   * @return Shortify_WP_Google_Service_Games_AchievementRevealResponse
   */
  public function reveal($achievementId, $optParams = array())
  {
    $params = array('achievementId' => $achievementId);
    $params = array_merge($params, $optParams);
    return $this->call('reveal', array($params), "Shortify_WP_Google_Service_Games_AchievementRevealResponse");
  }
  /**
   * Sets the steps for the currently authenticated player towards unlocking an
   * achievement. If the steps parameter is less than the current number of steps
   * that the player already gained for the achievement, the achievement is not
   * modified. (achievements.setStepsAtLeast)
   *
   * @param string $achievementId
   * The ID of the achievement used by this method.
   * @param int $steps
   * The minimum value to set the steps to.
   * @param array $optParams Optional parameters.
   * @return Shortify_WP_Google_Service_Games_AchievementSetStepsAtLeastResponse
   */
  public function setStepsAtLeast($achievementId, $steps, $optParams = array())
  {
    $params = array('achievementId' => $achievementId, 'steps' => $steps);
    $params = array_merge($params, $optParams);
    return $this->call('setStepsAtLeast', array($params), "Shortify_WP_Google_Service_Games_AchievementSetStepsAtLeastResponse");
  }
  /**
   * Unlocks this achievement for the currently authenticated player.
   * (achievements.unlock)
   *
   * @param string $achievementId
   * The ID of the achievement used by this method.
   * @param array $optParams Optional parameters.
   * @return Shortify_WP_Google_Service_Games_AchievementUnlockResponse
   */
  public function unlock($achievementId, $optParams = array())
  {
    $params = array('achievementId' => $achievementId);
    $params = array_merge($params, $optParams);
    return $this->call('unlock', array($params), "Shortify_WP_Google_Service_Games_AchievementUnlockResponse");
  }
  /**
   * Updates multiple achievements for the currently authenticated player.
   * (achievements.updateMultiple)
   *
   * @param Shortify_WP_Google_AchievementUpdateMultipleRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Shortify_WP_Google_Service_Games_AchievementUpdateMultipleResponse
   */
  public function updateMultiple(Shortify_WP_Google_Service_Games_AchievementUpdateMultipleRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateMultiple', array($params), "Shortify_WP_Google_Service_Games_AchievementUpdateMultipleResponse");
  }
}

/**
 * The "applications" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Shortify_WP_Google_Service_Games(...);
 *   $applications = $gamesService->applications;
 *  </code>
 */
class Shortify_WP_Google_Service_Games_Applications_Resource extends Shortify_WP_Google_Service_Resource
{

  /**
   * Retrieves the metadata of the application with the given ID. If the requested
   * application is not available for the specified platformType, the returned
   * response will not include any instance data. (applications.get)
   *
   * @param string $applicationId
   * The application being requested.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string platformType
   * Restrict application details returned to the specific platform.
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_Application
   */
  public function get($applicationId, $optParams = array())
  {
    $params = array('applicationId' => $applicationId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Shortify_WP_Google_Service_Games_Application");
  }
  /**
   * Indicate that the the currently authenticated user is playing your
   * application. (applications.played)
   *
   * @param array $optParams Optional parameters.
   */
  public function played($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('played', array($params));
  }
}

/**
 * The "events" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Shortify_WP_Google_Service_Games(...);
 *   $events = $gamesService->events;
 *  </code>
 */
class Shortify_WP_Google_Service_Games_Events_Resource extends Shortify_WP_Google_Service_Resource
{

  /**
   * Returns a list showing the current progress on events in this application for
   * the currently authenticated user. (events.listByPlayer)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The token returned by the previous request.
   * @opt_param int maxResults
   * The maximum number of events to return in the response, used for paging. For any response, the
    * actual number of events to return may be less than the specified maxResults.
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_PlayerEventListResponse
   */
  public function listByPlayer($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('listByPlayer', array($params), "Shortify_WP_Google_Service_Games_PlayerEventListResponse");
  }
  /**
   * Returns a list of the event definitions in this application.
   * (events.listDefinitions)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The token returned by the previous request.
   * @opt_param int maxResults
   * The maximum number of event definitions to return in the response, used for paging. For any
    * response, the actual number of event definitions to return may be less than the specified
    * maxResults.
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_EventDefinitionListResponse
   */
  public function listDefinitions($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('listDefinitions', array($params), "Shortify_WP_Google_Service_Games_EventDefinitionListResponse");
  }
  /**
   * Records a batch of changes to the number of times events have occurred for
   * the currently authenticated user of this application. (events.record)
   *
   * @param Shortify_WP_Google_EventRecordRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_EventUpdateResponse
   */
  public function record(Shortify_WP_Google_Service_Games_EventRecordRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('record', array($params), "Shortify_WP_Google_Service_Games_EventUpdateResponse");
  }
}

/**
 * The "leaderboards" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Shortify_WP_Google_Service_Games(...);
 *   $leaderboards = $gamesService->leaderboards;
 *  </code>
 */
class Shortify_WP_Google_Service_Games_Leaderboards_Resource extends Shortify_WP_Google_Service_Resource
{

  /**
   * Retrieves the metadata of the leaderboard with the given ID.
   * (leaderboards.get)
   *
   * @param string $leaderboardId
   * The ID of the leaderboard.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_Leaderboard
   */
  public function get($leaderboardId, $optParams = array())
  {
    $params = array('leaderboardId' => $leaderboardId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Shortify_WP_Google_Service_Games_Leaderboard");
  }
  /**
   * Lists all the leaderboard metadata for your application.
   * (leaderboards.listLeaderboards)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The token returned by the previous request.
   * @opt_param int maxResults
   * The maximum number of leaderboards to return in the response. For any response, the actual
    * number of leaderboards returned may be less than the specified maxResults.
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_LeaderboardListResponse
   */
  public function listLeaderboards($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Shortify_WP_Google_Service_Games_LeaderboardListResponse");
  }
}

/**
 * The "metagame" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Shortify_WP_Google_Service_Games(...);
 *   $metagame = $gamesService->metagame;
 *  </code>
 */
class Shortify_WP_Google_Service_Games_Metagame_Resource extends Shortify_WP_Google_Service_Resource
{

  /**
   * Return the metagame configuration data for the calling application.
   * (metagame.getMetagameConfig)
   *
   * @param array $optParams Optional parameters.
   * @return Shortify_WP_Google_Service_Games_MetagameConfig
   */
  public function getMetagameConfig($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('getMetagameConfig', array($params), "Shortify_WP_Google_Service_Games_MetagameConfig");
  }
  /**
   * List play data aggregated per category for the player corresponding to
   * playerId. (metagame.listCategoriesByPlayer)
   *
   * @param string $playerId
   * A player ID. A value of me may be used in place of the authenticated player's ID.
   * @param string $collection
   * The collection of categories for which data will be returned.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The token returned by the previous request.
   * @opt_param int maxResults
   * The maximum number of category resources to return in the response, used for paging. For any
    * response, the actual number of category resources returned may be less than the specified
    * maxResults.
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_CategoryListResponse
   */
  public function listCategoriesByPlayer($playerId, $collection, $optParams = array())
  {
    $params = array('playerId' => $playerId, 'collection' => $collection);
    $params = array_merge($params, $optParams);
    return $this->call('listCategoriesByPlayer', array($params), "Shortify_WP_Google_Service_Games_CategoryListResponse");
  }
}

/**
 * The "players" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Shortify_WP_Google_Service_Games(...);
 *   $players = $gamesService->players;
 *  </code>
 */
class Shortify_WP_Google_Service_Games_Players_Resource extends Shortify_WP_Google_Service_Resource
{

  /**
   * Retrieves the Player resource with the given ID. To retrieve the player for
   * the currently authenticated user, set playerId to me. (players.get)
   *
   * @param string $playerId
   * A player ID. A value of me may be used in place of the authenticated player's ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_Player
   */
  public function get($playerId, $optParams = array())
  {
    $params = array('playerId' => $playerId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Shortify_WP_Google_Service_Games_Player");
  }
  /**
   * Get the collection of players for the currently authenticated user.
   * (players.listPlayers)
   *
   * @param string $collection
   * Collection of players being retrieved
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The token returned by the previous request.
   * @opt_param int maxResults
   * The maximum number of player resources to return in the response, used for paging. For any
    * response, the actual number of player resources returned may be less than the specified
    * maxResults.
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_PlayerListResponse
   */
  public function listPlayers($collection, $optParams = array())
  {
    $params = array('collection' => $collection);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Shortify_WP_Google_Service_Games_PlayerListResponse");
  }
}

/**
 * The "pushtokens" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Shortify_WP_Google_Service_Games(...);
 *   $pushtokens = $gamesService->pushtokens;
 *  </code>
 */
class Shortify_WP_Google_Service_Games_Pushtokens_Resource extends Shortify_WP_Google_Service_Resource
{

  /**
   * Removes a push token for the current user and application. Removing a non-
   * existent push token will report success. (pushtokens.remove)
   *
   * @param Shortify_WP_Google_PushTokenId $postBody
   * @param array $optParams Optional parameters.
   */
  public function remove(Shortify_WP_Google_Service_Games_PushTokenId $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('remove', array($params));
  }
  /**
   * Registers a push token for the current user and application.
   * (pushtokens.update)
   *
   * @param Shortify_WP_Google_PushToken $postBody
   * @param array $optParams Optional parameters.
   */
  public function update(Shortify_WP_Google_Service_Games_PushToken $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params));
  }
}

/**
 * The "questMilestones" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Shortify_WP_Google_Service_Games(...);
 *   $questMilestones = $gamesService->questMilestones;
 *  </code>
 */
class Shortify_WP_Google_Service_Games_QuestMilestones_Resource extends Shortify_WP_Google_Service_Resource
{

  /**
   * Report that a reward for the milestone corresponding to milestoneId for the
   * quest corresponding to questId has been claimed by the currently authorized
   * user. (questMilestones.claim)
   *
   * @param string $questId
   * The ID of the quest.
   * @param string $milestoneId
   * The ID of the milestone.
   * @param string $requestId
   * A numeric ID to ensure that the request is handled correctly across retries. Your client
    * application must generate this ID randomly.
   * @param array $optParams Optional parameters.
   */
  public function claim($questId, $milestoneId, $requestId, $optParams = array())
  {
    $params = array('questId' => $questId, 'milestoneId' => $milestoneId, 'requestId' => $requestId);
    $params = array_merge($params, $optParams);
    return $this->call('claim', array($params));
  }
}

/**
 * The "quests" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Shortify_WP_Google_Service_Games(...);
 *   $quests = $gamesService->quests;
 *  </code>
 */
class Shortify_WP_Google_Service_Games_Quests_Resource extends Shortify_WP_Google_Service_Resource
{

  /**
   * Indicates that the currently authorized user will participate in the quest.
   * (quests.accept)
   *
   * @param string $questId
   * The ID of the quest.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_Quest
   */
  public function accept($questId, $optParams = array())
  {
    $params = array('questId' => $questId);
    $params = array_merge($params, $optParams);
    return $this->call('accept', array($params), "Shortify_WP_Google_Service_Games_Quest");
  }
  /**
   * Get a list of quests for your application and the currently authenticated
   * player. (quests.listQuests)
   *
   * @param string $playerId
   * A player ID. A value of me may be used in place of the authenticated player's ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The token returned by the previous request.
   * @opt_param int maxResults
   * The maximum number of quest resources to return in the response, used for paging. For any
    * response, the actual number of quest resources returned may be less than the specified
    * maxResults. Acceptable values are 1 to 50, inclusive. (Default: 50).
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_QuestListResponse
   */
  public function listQuests($playerId, $optParams = array())
  {
    $params = array('playerId' => $playerId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Shortify_WP_Google_Service_Games_QuestListResponse");
  }
}

/**
 * The "revisions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Shortify_WP_Google_Service_Games(...);
 *   $revisions = $gamesService->revisions;
 *  </code>
 */
class Shortify_WP_Google_Service_Games_Revisions_Resource extends Shortify_WP_Google_Service_Resource
{

  /**
   * Checks whether the games client is out of date. (revisions.check)
   *
   * @param string $clientRevision
   * The revision of the client SDK used by your application. Format:
    * [PLATFORM_TYPE]:[VERSION_NUMBER]. Possible values of PLATFORM_TYPE are:
  - "ANDROID" - Client
    * is running the Android SDK.
  - "IOS" - Client is running the iOS SDK.
  - "WEB_APP" - Client is
    * running as a Web App.
   * @param array $optParams Optional parameters.
   * @return Shortify_WP_Google_Service_Games_RevisionCheckResponse
   */
  public function check($clientRevision, $optParams = array())
  {
    $params = array('clientRevision' => $clientRevision);
    $params = array_merge($params, $optParams);
    return $this->call('check', array($params), "Shortify_WP_Google_Service_Games_RevisionCheckResponse");
  }
}

/**
 * The "rooms" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Shortify_WP_Google_Service_Games(...);
 *   $rooms = $gamesService->rooms;
 *  </code>
 */
class Shortify_WP_Google_Service_Games_Rooms_Resource extends Shortify_WP_Google_Service_Resource
{

  /**
   * Create a room. For internal use by the Games SDK only. Calling this method
   * directly is unsupported. (rooms.create)
   *
   * @param Shortify_WP_Google_RoomCreateRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_Room
   */
  public function create(Shortify_WP_Google_Service_Games_RoomCreateRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Shortify_WP_Google_Service_Games_Room");
  }
  /**
   * Decline an invitation to join a room. For internal use by the Games SDK only.
   * Calling this method directly is unsupported. (rooms.decline)
   *
   * @param string $roomId
   * The ID of the room.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_Room
   */
  public function decline($roomId, $optParams = array())
  {
    $params = array('roomId' => $roomId);
    $params = array_merge($params, $optParams);
    return $this->call('decline', array($params), "Shortify_WP_Google_Service_Games_Room");
  }
  /**
   * Dismiss an invitation to join a room. For internal use by the Games SDK only.
   * Calling this method directly is unsupported. (rooms.dismiss)
   *
   * @param string $roomId
   * The ID of the room.
   * @param array $optParams Optional parameters.
   */
  public function dismiss($roomId, $optParams = array())
  {
    $params = array('roomId' => $roomId);
    $params = array_merge($params, $optParams);
    return $this->call('dismiss', array($params));
  }
  /**
   * Get the data for a room. (rooms.get)
   *
   * @param string $roomId
   * The ID of the room.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_Room
   */
  public function get($roomId, $optParams = array())
  {
    $params = array('roomId' => $roomId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Shortify_WP_Google_Service_Games_Room");
  }
  /**
   * Join a room. For internal use by the Games SDK only. Calling this method
   * directly is unsupported. (rooms.join)
   *
   * @param string $roomId
   * The ID of the room.
   * @param Shortify_WP_Google_RoomJoinRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_Room
   */
  public function join($roomId, Shortify_WP_Google_Service_Games_RoomJoinRequest $postBody, $optParams = array())
  {
    $params = array('roomId' => $roomId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('join', array($params), "Shortify_WP_Google_Service_Games_Room");
  }
  /**
   * Leave a room. For internal use by the Games SDK only. Calling this method
   * directly is unsupported. (rooms.leave)
   *
   * @param string $roomId
   * The ID of the room.
   * @param Shortify_WP_Google_RoomLeaveRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_Room
   */
  public function leave($roomId, Shortify_WP_Google_Service_Games_RoomLeaveRequest $postBody, $optParams = array())
  {
    $params = array('roomId' => $roomId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('leave', array($params), "Shortify_WP_Google_Service_Games_Room");
  }
  /**
   * Returns invitations to join rooms. (rooms.listRooms)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The token returned by the previous request.
   * @opt_param int maxResults
   * The maximum number of rooms to return in the response, used for paging. For any response, the
    * actual number of rooms to return may be less than the specified maxResults.
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_RoomList
   */
  public function listRooms($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Shortify_WP_Google_Service_Games_RoomList");
  }
  /**
   * Updates sent by a client reporting the status of peers in a room. For
   * internal use by the Games SDK only. Calling this method directly is
   * unsupported. (rooms.reportStatus)
   *
   * @param string $roomId
   * The ID of the room.
   * @param Shortify_WP_Google_RoomP2PStatuses $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_RoomStatus
   */
  public function reportStatus($roomId, Shortify_WP_Google_Service_Games_RoomP2PStatuses $postBody, $optParams = array())
  {
    $params = array('roomId' => $roomId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('reportStatus', array($params), "Shortify_WP_Google_Service_Games_RoomStatus");
  }
}

/**
 * The "scores" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Shortify_WP_Google_Service_Games(...);
 *   $scores = $gamesService->scores;
 *  </code>
 */
class Shortify_WP_Google_Service_Games_Scores_Resource extends Shortify_WP_Google_Service_Resource
{

  /**
   * Get high scores, and optionally ranks, in leaderboards for the currently
   * authenticated player. For a specific time span, leaderboardId can be set to
   * ALL to retrieve data for all leaderboards in a given time span. NOTE: You
   * cannot ask for 'ALL' leaderboards and 'ALL' timeSpans in the same request;
   * only one parameter may be set to 'ALL'. (scores.get)
   *
   * @param string $playerId
   * A player ID. A value of me may be used in place of the authenticated player's ID.
   * @param string $leaderboardId
   * The ID of the leaderboard. Can be set to 'ALL' to retrieve data for all leaderboards for this
    * application.
   * @param string $timeSpan
   * The time span for the scores and ranks you're requesting.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string includeRankType
   * The types of ranks to return. If the parameter is omitted, no ranks will be returned.
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @opt_param int maxResults
   * The maximum number of leaderboard scores to return in the response. For any response, the actual
    * number of leaderboard scores returned may be less than the specified maxResults.
   * @opt_param string pageToken
   * The token returned by the previous request.
   * @return Shortify_WP_Google_Service_Games_PlayerLeaderboardScoreListResponse
   */
  public function get($playerId, $leaderboardId, $timeSpan, $optParams = array())
  {
    $params = array('playerId' => $playerId, 'leaderboardId' => $leaderboardId, 'timeSpan' => $timeSpan);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Shortify_WP_Google_Service_Games_PlayerLeaderboardScoreListResponse");
  }
  /**
   * Lists the scores in a leaderboard, starting from the top. (scores.listScores)
   *
   * @param string $leaderboardId
   * The ID of the leaderboard.
   * @param string $collection
   * The collection of scores you're requesting.
   * @param string $timeSpan
   * The time span for the scores and ranks you're requesting.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @opt_param int maxResults
   * The maximum number of leaderboard scores to return in the response. For any response, the actual
    * number of leaderboard scores returned may be less than the specified maxResults.
   * @opt_param string pageToken
   * The token returned by the previous request.
   * @return Shortify_WP_Google_Service_Games_LeaderboardScores
   */
  public function listScores($leaderboardId, $collection, $timeSpan, $optParams = array())
  {
    $params = array('leaderboardId' => $leaderboardId, 'collection' => $collection, 'timeSpan' => $timeSpan);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Shortify_WP_Google_Service_Games_LeaderboardScores");
  }
  /**
   * Lists the scores in a leaderboard around (and including) a player's score.
   * (scores.listWindow)
   *
   * @param string $leaderboardId
   * The ID of the leaderboard.
   * @param string $collection
   * The collection of scores you're requesting.
   * @param string $timeSpan
   * The time span for the scores and ranks you're requesting.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @opt_param bool returnTopIfAbsent
   * True if the top scores should be returned when the player is not in the leaderboard. Defaults to
    * true.
   * @opt_param int resultsAbove
   * The preferred number of scores to return above the player's score. More scores may be returned
    * if the player is at the bottom of the leaderboard; fewer may be returned if the player is at the
    * top. Must be less than or equal to maxResults.
   * @opt_param int maxResults
   * The maximum number of leaderboard scores to return in the response. For any response, the actual
    * number of leaderboard scores returned may be less than the specified maxResults.
   * @opt_param string pageToken
   * The token returned by the previous request.
   * @return Shortify_WP_Google_Service_Games_LeaderboardScores
   */
  public function listWindow($leaderboardId, $collection, $timeSpan, $optParams = array())
  {
    $params = array('leaderboardId' => $leaderboardId, 'collection' => $collection, 'timeSpan' => $timeSpan);
    $params = array_merge($params, $optParams);
    return $this->call('listWindow', array($params), "Shortify_WP_Google_Service_Games_LeaderboardScores");
  }
  /**
   * Submits a score to the specified leaderboard. (scores.submit)
   *
   * @param string $leaderboardId
   * The ID of the leaderboard.
   * @param string $score
   * The score you're submitting. The submitted score is ignored if it is worse than a previously
    * submitted score, where worse depends on the leaderboard sort order. The meaning of the score
    * value depends on the leaderboard format type. For fixed-point, the score represents the raw
    * value. For time, the score represents elapsed time in milliseconds. For currency, the score
    * represents a value in micro units.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @opt_param string scoreTag
   * Additional information about the score you're submitting. Values must contain no more than 64
    * URI-safe characters as defined by section 2.3 of RFC 3986.
   * @return Shortify_WP_Google_Service_Games_PlayerScoreResponse
   */
  public function submit($leaderboardId, $score, $optParams = array())
  {
    $params = array('leaderboardId' => $leaderboardId, 'score' => $score);
    $params = array_merge($params, $optParams);
    return $this->call('submit', array($params), "Shortify_WP_Google_Service_Games_PlayerScoreResponse");
  }
  /**
   * Submits multiple scores to leaderboards. (scores.submitMultiple)
   *
   * @param Shortify_WP_Google_PlayerScoreSubmissionList $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_PlayerScoreListResponse
   */
  public function submitMultiple(Shortify_WP_Google_Service_Games_PlayerScoreSubmissionList $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('submitMultiple', array($params), "Shortify_WP_Google_Service_Games_PlayerScoreListResponse");
  }
}

/**
 * The "snapshots" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Shortify_WP_Google_Service_Games(...);
 *   $snapshots = $gamesService->snapshots;
 *  </code>
 */
class Shortify_WP_Google_Service_Games_Snapshots_Resource extends Shortify_WP_Google_Service_Resource
{

  /**
   * Retrieves the metadata for a given snapshot ID. (snapshots.get)
   *
   * @param string $snapshotId
   * The ID of the snapshot.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_Snapshot
   */
  public function get($snapshotId, $optParams = array())
  {
    $params = array('snapshotId' => $snapshotId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Shortify_WP_Google_Service_Games_Snapshot");
  }
  /**
   * Retrieves a list of snapshots created by your application for the player
   * corresponding to the player ID. (snapshots.listSnapshots)
   *
   * @param string $playerId
   * A player ID. A value of me may be used in place of the authenticated player's ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The token returned by the previous request.
   * @opt_param int maxResults
   * The maximum number of snapshot resources to return in the response, used for paging. For any
    * response, the actual number of snapshot resources returned may be less than the specified
    * maxResults.
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_SnapshotListResponse
   */
  public function listSnapshots($playerId, $optParams = array())
  {
    $params = array('playerId' => $playerId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Shortify_WP_Google_Service_Games_SnapshotListResponse");
  }
}

/**
 * The "turnBasedMatches" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Shortify_WP_Google_Service_Games(...);
 *   $turnBasedMatches = $gamesService->turnBasedMatches;
 *  </code>
 */
class Shortify_WP_Google_Service_Games_TurnBasedMatches_Resource extends Shortify_WP_Google_Service_Resource
{

  /**
   * Cancel a turn-based match. (turnBasedMatches.cancel)
   *
   * @param string $matchId
   * The ID of the match.
   * @param array $optParams Optional parameters.
   */
  public function cancel($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('cancel', array($params));
  }
  /**
   * Create a turn-based match. (turnBasedMatches.create)
   *
   * @param Shortify_WP_Google_TurnBasedMatchCreateRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_TurnBasedMatch
   */
  public function create(Shortify_WP_Google_Service_Games_TurnBasedMatchCreateRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Shortify_WP_Google_Service_Games_TurnBasedMatch");
  }
  /**
   * Decline an invitation to play a turn-based match. (turnBasedMatches.decline)
   *
   * @param string $matchId
   * The ID of the match.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_TurnBasedMatch
   */
  public function decline($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('decline', array($params), "Shortify_WP_Google_Service_Games_TurnBasedMatch");
  }
  /**
   * Dismiss a turn-based match from the match list. The match will no longer show
   * up in the list and will not generate notifications.
   * (turnBasedMatches.dismiss)
   *
   * @param string $matchId
   * The ID of the match.
   * @param array $optParams Optional parameters.
   */
  public function dismiss($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('dismiss', array($params));
  }
  /**
   * Finish a turn-based match. Each player should make this call once, after all
   * results are in. Only the player whose turn it is may make the first call to
   * Finish, and can pass in the final match state. (turnBasedMatches.finish)
   *
   * @param string $matchId
   * The ID of the match.
   * @param Shortify_WP_Google_TurnBasedMatchResults $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_TurnBasedMatch
   */
  public function finish($matchId, Shortify_WP_Google_Service_Games_TurnBasedMatchResults $postBody, $optParams = array())
  {
    $params = array('matchId' => $matchId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('finish', array($params), "Shortify_WP_Google_Service_Games_TurnBasedMatch");
  }
  /**
   * Get the data for a turn-based match. (turnBasedMatches.get)
   *
   * @param string $matchId
   * The ID of the match.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @opt_param bool includeMatchData
   * Get match data along with metadata.
   * @return Shortify_WP_Google_Service_Games_TurnBasedMatch
   */
  public function get($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Shortify_WP_Google_Service_Games_TurnBasedMatch");
  }
  /**
   * Join a turn-based match. (turnBasedMatches.join)
   *
   * @param string $matchId
   * The ID of the match.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_TurnBasedMatch
   */
  public function join($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('join', array($params), "Shortify_WP_Google_Service_Games_TurnBasedMatch");
  }
  /**
   * Leave a turn-based match when it is not the current player's turn, without
   * canceling the match. (turnBasedMatches.leave)
   *
   * @param string $matchId
   * The ID of the match.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_TurnBasedMatch
   */
  public function leave($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('leave', array($params), "Shortify_WP_Google_Service_Games_TurnBasedMatch");
  }
  /**
   * Leave a turn-based match during the current player's turn, without canceling
   * the match. (turnBasedMatches.leaveTurn)
   *
   * @param string $matchId
   * The ID of the match.
   * @param int $matchVersion
   * The version of the match being updated.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @opt_param string pendingParticipantId
   * The ID of another participant who should take their turn next. If not set, the match will wait
    * for other player(s) to join via automatching; this is only valid if automatch criteria is set on
    * the match with remaining slots for automatched players.
   * @return Shortify_WP_Google_Service_Games_TurnBasedMatch
   */
  public function leaveTurn($matchId, $matchVersion, $optParams = array())
  {
    $params = array('matchId' => $matchId, 'matchVersion' => $matchVersion);
    $params = array_merge($params, $optParams);
    return $this->call('leaveTurn', array($params), "Shortify_WP_Google_Service_Games_TurnBasedMatch");
  }
  /**
   * Returns turn-based matches the player is or was involved in.
   * (turnBasedMatches.listTurnBasedMatches)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The token returned by the previous request.
   * @opt_param int maxCompletedMatches
   * The maximum number of completed or canceled matches to return in the response. If not set, all
    * matches returned could be completed or canceled.
   * @opt_param int maxResults
   * The maximum number of matches to return in the response, used for paging. For any response, the
    * actual number of matches to return may be less than the specified maxResults.
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @opt_param bool includeMatchData
   * True if match data should be returned in the response. Note that not all data will necessarily
    * be returned if include_match_data is true; the server may decide to only return data for some of
    * the matches to limit download size for the client. The remainder of the data for these matches
    * will be retrievable on request.
   * @return Shortify_WP_Google_Service_Games_TurnBasedMatchList
   */
  public function listTurnBasedMatches($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Shortify_WP_Google_Service_Games_TurnBasedMatchList");
  }
  /**
   * Create a rematch of a match that was previously completed, with the same
   * participants. This can be called by only one player on a match still in their
   * list; the player must have called Finish first. Returns the newly created
   * match; it will be the caller's turn. (turnBasedMatches.rematch)
   *
   * @param string $matchId
   * The ID of the match.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId
   * A randomly generated numeric ID for each request specified by the caller. This number is used at
    * the server to ensure that the request is handled correctly across retries.
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_TurnBasedMatchRematch
   */
  public function rematch($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('rematch', array($params), "Shortify_WP_Google_Service_Games_TurnBasedMatchRematch");
  }
  /**
   * Returns turn-based matches the player is or was involved in that changed
   * since the last sync call, with the least recent changes coming first. Matches
   * that should be removed from the local cache will have a status of
   * MATCH_DELETED. (turnBasedMatches.sync)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The token returned by the previous request.
   * @opt_param int maxCompletedMatches
   * The maximum number of completed or canceled matches to return in the response. If not set, all
    * matches returned could be completed or canceled.
   * @opt_param int maxResults
   * The maximum number of matches to return in the response, used for paging. For any response, the
    * actual number of matches to return may be less than the specified maxResults.
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @opt_param bool includeMatchData
   * True if match data should be returned in the response. Note that not all data will necessarily
    * be returned if include_match_data is true; the server may decide to only return data for some of
    * the matches to limit download size for the client. The remainder of the data for these matches
    * will be retrievable on request.
   * @return Shortify_WP_Google_Service_Games_TurnBasedMatchSync
   */
  public function sync($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('sync', array($params), "Shortify_WP_Google_Service_Games_TurnBasedMatchSync");
  }
  /**
   * Commit the results of a player turn. (turnBasedMatches.takeTurn)
   *
   * @param string $matchId
   * The ID of the match.
   * @param Shortify_WP_Google_TurnBasedMatchTurn $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return Shortify_WP_Google_Service_Games_TurnBasedMatch
   */
  public function takeTurn($matchId, Shortify_WP_Google_Service_Games_TurnBasedMatchTurn $postBody, $optParams = array())
  {
    $params = array('matchId' => $matchId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('takeTurn', array($params), "Shortify_WP_Google_Service_Games_TurnBasedMatch");
  }
}




class Shortify_WP_Google_Service_Games_AchievementDefinition extends Shortify_WP_Google_Model
{
  public $achievementType;
  public $description;
  public $experiencePoints;
  public $formattedTotalSteps;
  public $id;
  public $initialState;
  public $isRevealedIconUrlDefault;
  public $isUnlockedIconUrlDefault;
  public $kind;
  public $name;
  public $revealedIconUrl;
  public $totalSteps;
  public $unlockedIconUrl;

  public function setAchievementType($achievementType)
  {
    $this->achievementType = $achievementType;
  }

  public function getAchievementType()
  {
    return $this->achievementType;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setExperiencePoints($experiencePoints)
  {
    $this->experiencePoints = $experiencePoints;
  }

  public function getExperiencePoints()
  {
    return $this->experiencePoints;
  }

  public function setFormattedTotalSteps($formattedTotalSteps)
  {
    $this->formattedTotalSteps = $formattedTotalSteps;
  }

  public function getFormattedTotalSteps()
  {
    return $this->formattedTotalSteps;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setInitialState($initialState)
  {
    $this->initialState = $initialState;
  }

  public function getInitialState()
  {
    return $this->initialState;
  }

  public function setIsRevealedIconUrlDefault($isRevealedIconUrlDefault)
  {
    $this->isRevealedIconUrlDefault = $isRevealedIconUrlDefault;
  }

  public function getIsRevealedIconUrlDefault()
  {
    return $this->isRevealedIconUrlDefault;
  }

  public function setIsUnlockedIconUrlDefault($isUnlockedIconUrlDefault)
  {
    $this->isUnlockedIconUrlDefault = $isUnlockedIconUrlDefault;
  }

  public function getIsUnlockedIconUrlDefault()
  {
    return $this->isUnlockedIconUrlDefault;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setRevealedIconUrl($revealedIconUrl)
  {
    $this->revealedIconUrl = $revealedIconUrl;
  }

  public function getRevealedIconUrl()
  {
    return $this->revealedIconUrl;
  }

  public function setTotalSteps($totalSteps)
  {
    $this->totalSteps = $totalSteps;
  }

  public function getTotalSteps()
  {
    return $this->totalSteps;
  }

  public function setUnlockedIconUrl($unlockedIconUrl)
  {
    $this->unlockedIconUrl = $unlockedIconUrl;
  }

  public function getUnlockedIconUrl()
  {
    return $this->unlockedIconUrl;
  }
}

class Shortify_WP_Google_Service_Games_AchievementDefinitionsListResponse extends Shortify_WP_Google_Collection
{
  protected $itemsType = 'Shortify_WP_Google_Service_Games_AchievementDefinition';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class Shortify_WP_Google_Service_Games_AchievementIncrementResponse extends Shortify_WP_Google_Model
{
  public $currentSteps;
  public $kind;
  public $newlyUnlocked;

  public function setCurrentSteps($currentSteps)
  {
    $this->currentSteps = $currentSteps;
  }

  public function getCurrentSteps()
  {
    return $this->currentSteps;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNewlyUnlocked($newlyUnlocked)
  {
    $this->newlyUnlocked = $newlyUnlocked;
  }

  public function getNewlyUnlocked()
  {
    return $this->newlyUnlocked;
  }
}

class Shortify_WP_Google_Service_Games_AchievementRevealResponse extends Shortify_WP_Google_Model
{
  public $currentState;
  public $kind;

  public function setCurrentState($currentState)
  {
    $this->currentState = $currentState;
  }

  public function getCurrentState()
  {
    return $this->currentState;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}

class Shortify_WP_Google_Service_Games_AchievementSetStepsAtLeastResponse extends Shortify_WP_Google_Model
{
  public $currentSteps;
  public $kind;
  public $newlyUnlocked;

  public function setCurrentSteps($currentSteps)
  {
    $this->currentSteps = $currentSteps;
  }

  public function getCurrentSteps()
  {
    return $this->currentSteps;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNewlyUnlocked($newlyUnlocked)
  {
    $this->newlyUnlocked = $newlyUnlocked;
  }

  public function getNewlyUnlocked()
  {
    return $this->newlyUnlocked;
  }
}

class Shortify_WP_Google_Service_Games_AchievementUnlockResponse extends Shortify_WP_Google_Model
{
  public $kind;
  public $newlyUnlocked;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNewlyUnlocked($newlyUnlocked)
  {
    $this->newlyUnlocked = $newlyUnlocked;
  }

  public function getNewlyUnlocked()
  {
    return $this->newlyUnlocked;
  }
}

class Shortify_WP_Google_Service_Games_AchievementUpdateMultipleRequest extends Shortify_WP_Google_Collection
{
  public $kind;
  protected $updatesType = 'Shortify_WP_Google_Service_Games_AchievementUpdateRequest';
  protected $updatesDataType = 'array';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setUpdates($updates)
  {
    $this->updates = $updates;
  }

  public function getUpdates()
  {
    return $this->updates;
  }
}

class Shortify_WP_Google_Service_Games_AchievementUpdateMultipleResponse extends Shortify_WP_Google_Collection
{
  public $kind;
  protected $updatedAchievementsType = 'Shortify_WP_Google_Service_Games_AchievementUpdateResponse';
  protected $updatedAchievementsDataType = 'array';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setUpdatedAchievements($updatedAchievements)
  {
    $this->updatedAchievements = $updatedAchievements;
  }

  public function getUpdatedAchievements()
  {
    return $this->updatedAchievements;
  }
}

class Shortify_WP_Google_Service_Games_AchievementUpdateRequest extends Shortify_WP_Google_Model
{
  public $achievementId;
  protected $incrementPayloadType = 'Shortify_WP_Google_Service_Games_GamesAchievementIncrement';
  protected $incrementPayloadDataType = '';
  public $kind;
  protected $setStepsAtLeastPayloadType = 'Shortify_WP_Google_Service_Games_GamesAchievementSetStepsAtLeast';
  protected $setStepsAtLeastPayloadDataType = '';
  public $updateType;

  public function setAchievementId($achievementId)
  {
    $this->achievementId = $achievementId;
  }

  public function getAchievementId()
  {
    return $this->achievementId;
  }

  public function setIncrementPayload(Shortify_WP_Google_Service_Games_GamesAchievementIncrement $incrementPayload)
  {
    $this->incrementPayload = $incrementPayload;
  }

  public function getIncrementPayload()
  {
    return $this->incrementPayload;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setSetStepsAtLeastPayload(Shortify_WP_Google_Service_Games_GamesAchievementSetStepsAtLeast $setStepsAtLeastPayload)
  {
    $this->setStepsAtLeastPayload = $setStepsAtLeastPayload;
  }

  public function getSetStepsAtLeastPayload()
  {
    return $this->setStepsAtLeastPayload;
  }

  public function setUpdateType($updateType)
  {
    $this->updateType = $updateType;
  }

  public function getUpdateType()
  {
    return $this->updateType;
  }
}

class Shortify_WP_Google_Service_Games_AchievementUpdateResponse extends Shortify_WP_Google_Model
{
  public $achievementId;
  public $currentState;
  public $currentSteps;
  public $kind;
  public $newlyUnlocked;
  public $updateOccurred;

  public function setAchievementId($achievementId)
  {
    $this->achievementId = $achievementId;
  }

  public function getAchievementId()
  {
    return $this->achievementId;
  }

  public function setCurrentState($currentState)
  {
    $this->currentState = $currentState;
  }

  public function getCurrentState()
  {
    return $this->currentState;
  }

  public function setCurrentSteps($currentSteps)
  {
    $this->currentSteps = $currentSteps;
  }

  public function getCurrentSteps()
  {
    return $this->currentSteps;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNewlyUnlocked($newlyUnlocked)
  {
    $this->newlyUnlocked = $newlyUnlocked;
  }

  public function getNewlyUnlocked()
  {
    return $this->newlyUnlocked;
  }

  public function setUpdateOccurred($updateOccurred)
  {
    $this->updateOccurred = $updateOccurred;
  }

  public function getUpdateOccurred()
  {
    return $this->updateOccurred;
  }
}

class Shortify_WP_Google_Service_Games_AggregateStats extends Shortify_WP_Google_Model
{
  public $count;
  public $kind;
  public $max;
  public $min;
  public $sum;

  public function setCount($count)
  {
    $this->count = $count;
  }

  public function getCount()
  {
    return $this->count;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMax($max)
  {
    $this->max = $max;
  }

  public function getMax()
  {
    return $this->max;
  }

  public function setMin($min)
  {
    $this->min = $min;
  }

  public function getMin()
  {
    return $this->min;
  }

  public function setSum($sum)
  {
    $this->sum = $sum;
  }

  public function getSum()
  {
    return $this->sum;
  }
}

class Shortify_WP_Google_Service_Games_AnonymousPlayer extends Shortify_WP_Google_Model
{
  public $avatarImageUrl;
  public $displayName;
  public $kind;

  public function setAvatarImageUrl($avatarImageUrl)
  {
    $this->avatarImageUrl = $avatarImageUrl;
  }

  public function getAvatarImageUrl()
  {
    return $this->avatarImageUrl;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}

class Shortify_WP_Google_Service_Games_Application extends Shortify_WP_Google_Collection
{
  public $achievementCount;
  protected $assetsType = 'Shortify_WP_Google_Service_Games_ImageAsset';
  protected $assetsDataType = 'array';
  public $author;
  protected $categoryType = 'Shortify_WP_Google_Service_Games_ApplicationCategory';
  protected $categoryDataType = '';
  public $description;
  public $enabledFeatures;
  public $id;
  protected $instancesType = 'Shortify_WP_Google_Service_Games_Instance';
  protected $instancesDataType = 'array';
  public $kind;
  public $lastUpdatedTimestamp;
  public $leaderboardCount;
  public $name;

  public function setAchievementCount($achievementCount)
  {
    $this->achievementCount = $achievementCount;
  }

  public function getAchievementCount()
  {
    return $this->achievementCount;
  }

  public function setAssets($assets)
  {
    $this->assets = $assets;
  }

  public function getAssets()
  {
    return $this->assets;
  }

  public function setAuthor($author)
  {
    $this->author = $author;
  }

  public function getAuthor()
  {
    return $this->author;
  }

  public function setCategory(Shortify_WP_Google_Service_Games_ApplicationCategory $category)
  {
    $this->category = $category;
  }

  public function getCategory()
  {
    return $this->category;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setEnabledFeatures($enabledFeatures)
  {
    $this->enabledFeatures = $enabledFeatures;
  }

  public function getEnabledFeatures()
  {
    return $this->enabledFeatures;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setInstances($instances)
  {
    $this->instances = $instances;
  }

  public function getInstances()
  {
    return $this->instances;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLastUpdatedTimestamp($lastUpdatedTimestamp)
  {
    $this->lastUpdatedTimestamp = $lastUpdatedTimestamp;
  }

  public function getLastUpdatedTimestamp()
  {
    return $this->lastUpdatedTimestamp;
  }

  public function setLeaderboardCount($leaderboardCount)
  {
    $this->leaderboardCount = $leaderboardCount;
  }

  public function getLeaderboardCount()
  {
    return $this->leaderboardCount;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }
}

class Shortify_WP_Google_Service_Games_ApplicationCategory extends Shortify_WP_Google_Model
{
  public $kind;
  public $primary;
  public $secondary;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPrimary($primary)
  {
    $this->primary = $primary;
  }

  public function getPrimary()
  {
    return $this->primary;
  }

  public function setSecondary($secondary)
  {
    $this->secondary = $secondary;
  }

  public function getSecondary()
  {
    return $this->secondary;
  }
}

class Shortify_WP_Google_Service_Games_Category extends Shortify_WP_Google_Model
{
  public $category;
  public $experiencePoints;
  public $kind;

  public function setCategory($category)
  {
    $this->category = $category;
  }

  public function getCategory()
  {
    return $this->category;
  }

  public function setExperiencePoints($experiencePoints)
  {
    $this->experiencePoints = $experiencePoints;
  }

  public function getExperiencePoints()
  {
    return $this->experiencePoints;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}

class Shortify_WP_Google_Service_Games_CategoryListResponse extends Shortify_WP_Google_Collection
{
  protected $itemsType = 'Shortify_WP_Google_Service_Games_Category';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class Shortify_WP_Google_Service_Games_EventBatchRecordFailure extends Shortify_WP_Google_Model
{
  public $failureCause;
  public $kind;
  protected $rangeType = 'Shortify_WP_Google_Service_Games_EventPeriodRange';
  protected $rangeDataType = '';

  public function setFailureCause($failureCause)
  {
    $this->failureCause = $failureCause;
  }

  public function getFailureCause()
  {
    return $this->failureCause;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setRange(Shortify_WP_Google_Service_Games_EventPeriodRange $range)
  {
    $this->range = $range;
  }

  public function getRange()
  {
    return $this->range;
  }
}

class Shortify_WP_Google_Service_Games_EventChild extends Shortify_WP_Google_Model
{
  public $childId;
  public $kind;

  public function setChildId($childId)
  {
    $this->childId = $childId;
  }

  public function getChildId()
  {
    return $this->childId;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}

class Shortify_WP_Google_Service_Games_EventDefinition extends Shortify_WP_Google_Collection
{
  protected $childEventsType = 'Shortify_WP_Google_Service_Games_EventChild';
  protected $childEventsDataType = 'array';
  public $description;
  public $displayName;
  public $id;
  public $imageUrl;
  public $isDefaultImageUrl;
  public $kind;
  public $visibility;

  public function setChildEvents($childEvents)
  {
    $this->childEvents = $childEvents;
  }

  public function getChildEvents()
  {
    return $this->childEvents;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setImageUrl($imageUrl)
  {
    $this->imageUrl = $imageUrl;
  }

  public function getImageUrl()
  {
    return $this->imageUrl;
  }

  public function setIsDefaultImageUrl($isDefaultImageUrl)
  {
    $this->isDefaultImageUrl = $isDefaultImageUrl;
  }

  public function getIsDefaultImageUrl()
  {
    return $this->isDefaultImageUrl;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setVisibility($visibility)
  {
    $this->visibility = $visibility;
  }

  public function getVisibility()
  {
    return $this->visibility;
  }
}

class Shortify_WP_Google_Service_Games_EventDefinitionListResponse extends Shortify_WP_Google_Collection
{
  protected $itemsType = 'Shortify_WP_Google_Service_Games_EventDefinition';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class Shortify_WP_Google_Service_Games_EventPeriodRange extends Shortify_WP_Google_Model
{
  public $kind;
  public $periodEndMillis;
  public $periodStartMillis;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPeriodEndMillis($periodEndMillis)
  {
    $this->periodEndMillis = $periodEndMillis;
  }

  public function getPeriodEndMillis()
  {
    return $this->periodEndMillis;
  }

  public function setPeriodStartMillis($periodStartMillis)
  {
    $this->periodStartMillis = $periodStartMillis;
  }

  public function getPeriodStartMillis()
  {
    return $this->periodStartMillis;
  }
}

class Shortify_WP_Google_Service_Games_EventPeriodUpdate extends Shortify_WP_Google_Collection
{
  public $kind;
  protected $timePeriodType = 'Shortify_WP_Google_Service_Games_EventPeriodRange';
  protected $timePeriodDataType = '';
  protected $updatesType = 'Shortify_WP_Google_Service_Games_EventUpdateRequest';
  protected $updatesDataType = 'array';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setTimePeriod(Shortify_WP_Google_Service_Games_EventPeriodRange $timePeriod)
  {
    $this->timePeriod = $timePeriod;
  }

  public function getTimePeriod()
  {
    return $this->timePeriod;
  }

  public function setUpdates($updates)
  {
    $this->updates = $updates;
  }

  public function getUpdates()
  {
    return $this->updates;
  }
}

class Shortify_WP_Google_Service_Games_EventRecordFailure extends Shortify_WP_Google_Model
{
  public $eventId;
  public $failureCause;
  public $kind;

  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }

  public function getEventId()
  {
    return $this->eventId;
  }

  public function setFailureCause($failureCause)
  {
    $this->failureCause = $failureCause;
  }

  public function getFailureCause()
  {
    return $this->failureCause;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}

class Shortify_WP_Google_Service_Games_EventRecordRequest extends Shortify_WP_Google_Collection
{
  public $currentTimeMillis;
  public $kind;
  public $requestId;
  protected $timePeriodsType = 'Shortify_WP_Google_Service_Games_EventPeriodUpdate';
  protected $timePeriodsDataType = 'array';

  public function setCurrentTimeMillis($currentTimeMillis)
  {
    $this->currentTimeMillis = $currentTimeMillis;
  }

  public function getCurrentTimeMillis()
  {
    return $this->currentTimeMillis;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }

  public function getRequestId()
  {
    return $this->requestId;
  }

  public function setTimePeriods($timePeriods)
  {
    $this->timePeriods = $timePeriods;
  }

  public function getTimePeriods()
  {
    return $this->timePeriods;
  }
}

class Shortify_WP_Google_Service_Games_EventUpdateRequest extends Shortify_WP_Google_Model
{
  public $definitionId;
  public $kind;
  public $updateCount;

  public function setDefinitionId($definitionId)
  {
    $this->definitionId = $definitionId;
  }

  public function getDefinitionId()
  {
    return $this->definitionId;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setUpdateCount($updateCount)
  {
    $this->updateCount = $updateCount;
  }

  public function getUpdateCount()
  {
    return $this->updateCount;
  }
}

class Shortify_WP_Google_Service_Games_EventUpdateResponse extends Shortify_WP_Google_Collection
{
  protected $batchFailuresType = 'Shortify_WP_Google_Service_Games_EventBatchRecordFailure';
  protected $batchFailuresDataType = 'array';
  protected $eventFailuresType = 'Shortify_WP_Google_Service_Games_EventRecordFailure';
  protected $eventFailuresDataType = 'array';
  public $kind;
  protected $playerEventsType = 'Shortify_WP_Google_Service_Games_PlayerEvent';
  protected $playerEventsDataType = 'array';

  public function setBatchFailures($batchFailures)
  {
    $this->batchFailures = $batchFailures;
  }

  public function getBatchFailures()
  {
    return $this->batchFailures;
  }

  public function setEventFailures($eventFailures)
  {
    $this->eventFailures = $eventFailures;
  }

  public function getEventFailures()
  {
    return $this->eventFailures;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPlayerEvents($playerEvents)
  {
    $this->playerEvents = $playerEvents;
  }

  public function getPlayerEvents()
  {
    return $this->playerEvents;
  }
}

class Shortify_WP_Google_Service_Games_GamesAchievementIncrement extends Shortify_WP_Google_Model
{
  public $kind;
  public $requestId;
  public $steps;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }

  public function getRequestId()
  {
    return $this->requestId;
  }

  public function setSteps($steps)
  {
    $this->steps = $steps;
  }

  public function getSteps()
  {
    return $this->steps;
  }
}

class Shortify_WP_Google_Service_Games_GamesAchievementSetStepsAtLeast extends Shortify_WP_Google_Model
{
  public $kind;
  public $steps;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setSteps($steps)
  {
    $this->steps = $steps;
  }

  public function getSteps()
  {
    return $this->steps;
  }
}

class Shortify_WP_Google_Service_Games_ImageAsset extends Shortify_WP_Google_Model
{
  public $height;
  public $kind;
  public $name;
  public $url;
  public $width;

  public function setHeight($height)
  {
    $this->height = $height;
  }

  public function getHeight()
  {
    return $this->height;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setUrl($url)
  {
    $this->url = $url;
  }

  public function getUrl()
  {
    return $this->url;
  }

  public function setWidth($width)
  {
    $this->width = $width;
  }

  public function getWidth()
  {
    return $this->width;
  }
}

class Shortify_WP_Google_Service_Games_Instance extends Shortify_WP_Google_Model
{
  public $acquisitionUri;
  protected $androidInstanceType = 'Shortify_WP_Google_Service_Games_InstanceAndroidDetails';
  protected $androidInstanceDataType = '';
  protected $iosInstanceType = 'Shortify_WP_Google_Service_Games_InstanceIosDetails';
  protected $iosInstanceDataType = '';
  public $kind;
  public $name;
  public $platformType;
  public $realtimePlay;
  public $turnBasedPlay;
  protected $webInstanceType = 'Shortify_WP_Google_Service_Games_InstanceWebDetails';
  protected $webInstanceDataType = '';

  public function setAcquisitionUri($acquisitionUri)
  {
    $this->acquisitionUri = $acquisitionUri;
  }

  public function getAcquisitionUri()
  {
    return $this->acquisitionUri;
  }

  public function setAndroidInstance(Shortify_WP_Google_Service_Games_InstanceAndroidDetails $androidInstance)
  {
    $this->androidInstance = $androidInstance;
  }

  public function getAndroidInstance()
  {
    return $this->androidInstance;
  }

  public function setIosInstance(Shortify_WP_Google_Service_Games_InstanceIosDetails $iosInstance)
  {
    $this->iosInstance = $iosInstance;
  }

  public function getIosInstance()
  {
    return $this->iosInstance;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setPlatformType($platformType)
  {
    $this->platformType = $platformType;
  }

  public function getPlatformType()
  {
    return $this->platformType;
  }

  public function setRealtimePlay($realtimePlay)
  {
    $this->realtimePlay = $realtimePlay;
  }

  public function getRealtimePlay()
  {
    return $this->realtimePlay;
  }

  public function setTurnBasedPlay($turnBasedPlay)
  {
    $this->turnBasedPlay = $turnBasedPlay;
  }

  public function getTurnBasedPlay()
  {
    return $this->turnBasedPlay;
  }

  public function setWebInstance(Shortify_WP_Google_Service_Games_InstanceWebDetails $webInstance)
  {
    $this->webInstance = $webInstance;
  }

  public function getWebInstance()
  {
    return $this->webInstance;
  }
}

class Shortify_WP_Google_Service_Games_InstanceAndroidDetails extends Shortify_WP_Google_Model
{
  public $enablePiracyCheck;
  public $kind;
  public $packageName;
  public $preferred;

  public function setEnablePiracyCheck($enablePiracyCheck)
  {
    $this->enablePiracyCheck = $enablePiracyCheck;
  }

  public function getEnablePiracyCheck()
  {
    return $this->enablePiracyCheck;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }

  public function getPackageName()
  {
    return $this->packageName;
  }

  public function setPreferred($preferred)
  {
    $this->preferred = $preferred;
  }

  public function getPreferred()
  {
    return $this->preferred;
  }
}

class Shortify_WP_Google_Service_Games_InstanceIosDetails extends Shortify_WP_Google_Model
{
  public $bundleIdentifier;
  public $itunesAppId;
  public $kind;
  public $preferredForIpad;
  public $preferredForIphone;
  public $supportIpad;
  public $supportIphone;

  public function setBundleIdentifier($bundleIdentifier)
  {
    $this->bundleIdentifier = $bundleIdentifier;
  }

  public function getBundleIdentifier()
  {
    return $this->bundleIdentifier;
  }

  public function setItunesAppId($itunesAppId)
  {
    $this->itunesAppId = $itunesAppId;
  }

  public function getItunesAppId()
  {
    return $this->itunesAppId;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPreferredForIpad($preferredForIpad)
  {
    $this->preferredForIpad = $preferredForIpad;
  }

  public function getPreferredForIpad()
  {
    return $this->preferredForIpad;
  }

  public function setPreferredForIphone($preferredForIphone)
  {
    $this->preferredForIphone = $preferredForIphone;
  }

  public function getPreferredForIphone()
  {
    return $this->preferredForIphone;
  }

  public function setSupportIpad($supportIpad)
  {
    $this->supportIpad = $supportIpad;
  }

  public function getSupportIpad()
  {
    return $this->supportIpad;
  }

  public function setSupportIphone($supportIphone)
  {
    $this->supportIphone = $supportIphone;
  }

  public function getSupportIphone()
  {
    return $this->supportIphone;
  }
}

class Shortify_WP_Google_Service_Games_InstanceWebDetails extends Shortify_WP_Google_Model
{
  public $kind;
  public $launchUrl;
  public $preferred;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLaunchUrl($launchUrl)
  {
    $this->launchUrl = $launchUrl;
  }

  public function getLaunchUrl()
  {
    return $this->launchUrl;
  }

  public function setPreferred($preferred)
  {
    $this->preferred = $preferred;
  }

  public function getPreferred()
  {
    return $this->preferred;
  }
}

class Shortify_WP_Google_Service_Games_Leaderboard extends Shortify_WP_Google_Model
{
  public $iconUrl;
  public $id;
  public $isIconUrlDefault;
  public $kind;
  public $name;
  public $order;

  public function setIconUrl($iconUrl)
  {
    $this->iconUrl = $iconUrl;
  }

  public function getIconUrl()
  {
    return $this->iconUrl;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setIsIconUrlDefault($isIconUrlDefault)
  {
    $this->isIconUrlDefault = $isIconUrlDefault;
  }

  public function getIsIconUrlDefault()
  {
    return $this->isIconUrlDefault;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setOrder($order)
  {
    $this->order = $order;
  }

  public function getOrder()
  {
    return $this->order;
  }
}

class Shortify_WP_Google_Service_Games_LeaderboardEntry extends Shortify_WP_Google_Model
{
  public $formattedScore;
  public $formattedScoreRank;
  public $kind;
  protected $playerType = 'Shortify_WP_Google_Service_Games_Player';
  protected $playerDataType = '';
  public $scoreRank;
  public $scoreTag;
  public $scoreValue;
  public $timeSpan;
  public $writeTimestampMillis;

  public function setFormattedScore($formattedScore)
  {
    $this->formattedScore = $formattedScore;
  }

  public function getFormattedScore()
  {
    return $this->formattedScore;
  }

  public function setFormattedScoreRank($formattedScoreRank)
  {
    $this->formattedScoreRank = $formattedScoreRank;
  }

  public function getFormattedScoreRank()
  {
    return $this->formattedScoreRank;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPlayer(Shortify_WP_Google_Service_Games_Player $player)
  {
    $this->player = $player;
  }

  public function getPlayer()
  {
    return $this->player;
  }

  public function setScoreRank($scoreRank)
  {
    $this->scoreRank = $scoreRank;
  }

  public function getScoreRank()
  {
    return $this->scoreRank;
  }

  public function setScoreTag($scoreTag)
  {
    $this->scoreTag = $scoreTag;
  }

  public function getScoreTag()
  {
    return $this->scoreTag;
  }

  public function setScoreValue($scoreValue)
  {
    $this->scoreValue = $scoreValue;
  }

  public function getScoreValue()
  {
    return $this->scoreValue;
  }

  public function setTimeSpan($timeSpan)
  {
    $this->timeSpan = $timeSpan;
  }

  public function getTimeSpan()
  {
    return $this->timeSpan;
  }

  public function setWriteTimestampMillis($writeTimestampMillis)
  {
    $this->writeTimestampMillis = $writeTimestampMillis;
  }

  public function getWriteTimestampMillis()
  {
    return $this->writeTimestampMillis;
  }
}

class Shortify_WP_Google_Service_Games_LeaderboardListResponse extends Shortify_WP_Google_Collection
{
  protected $itemsType = 'Shortify_WP_Google_Service_Games_Leaderboard';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class Shortify_WP_Google_Service_Games_LeaderboardScoreRank extends Shortify_WP_Google_Model
{
  public $formattedNumScores;
  public $formattedRank;
  public $kind;
  public $numScores;
  public $rank;

  public function setFormattedNumScores($formattedNumScores)
  {
    $this->formattedNumScores = $formattedNumScores;
  }

  public function getFormattedNumScores()
  {
    return $this->formattedNumScores;
  }

  public function setFormattedRank($formattedRank)
  {
    $this->formattedRank = $formattedRank;
  }

  public function getFormattedRank()
  {
    return $this->formattedRank;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNumScores($numScores)
  {
    $this->numScores = $numScores;
  }

  public function getNumScores()
  {
    return $this->numScores;
  }

  public function setRank($rank)
  {
    $this->rank = $rank;
  }

  public function getRank()
  {
    return $this->rank;
  }
}

class Shortify_WP_Google_Service_Games_LeaderboardScores extends Shortify_WP_Google_Collection
{
  protected $itemsType = 'Shortify_WP_Google_Service_Games_LeaderboardEntry';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;
  public $numScores;
  protected $playerScoreType = 'Shortify_WP_Google_Service_Games_LeaderboardEntry';
  protected $playerScoreDataType = '';
  public $prevPageToken;

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setNumScores($numScores)
  {
    $this->numScores = $numScores;
  }

  public function getNumScores()
  {
    return $this->numScores;
  }

  public function setPlayerScore(Shortify_WP_Google_Service_Games_LeaderboardEntry $playerScore)
  {
    $this->playerScore = $playerScore;
  }

  public function getPlayerScore()
  {
    return $this->playerScore;
  }

  public function setPrevPageToken($prevPageToken)
  {
    $this->prevPageToken = $prevPageToken;
  }

  public function getPrevPageToken()
  {
    return $this->prevPageToken;
  }
}

class Shortify_WP_Google_Service_Games_MetagameConfig extends Shortify_WP_Google_Collection
{
  public $currentVersion;
  public $kind;
  protected $playerLevelsType = 'Shortify_WP_Google_Service_Games_PlayerLevel';
  protected $playerLevelsDataType = 'array';

  public function setCurrentVersion($currentVersion)
  {
    $this->currentVersion = $currentVersion;
  }

  public function getCurrentVersion()
  {
    return $this->currentVersion;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPlayerLevels($playerLevels)
  {
    $this->playerLevels = $playerLevels;
  }

  public function getPlayerLevels()
  {
    return $this->playerLevels;
  }
}

class Shortify_WP_Google_Service_Games_NetworkDiagnostics extends Shortify_WP_Google_Model
{
  public $androidNetworkSubtype;
  public $androidNetworkType;
  public $iosNetworkType;
  public $kind;
  public $networkOperatorCode;
  public $networkOperatorName;
  public $registrationLatencyMillis;

  public function setAndroidNetworkSubtype($androidNetworkSubtype)
  {
    $this->androidNetworkSubtype = $androidNetworkSubtype;
  }

  public function getAndroidNetworkSubtype()
  {
    return $this->androidNetworkSubtype;
  }

  public function setAndroidNetworkType($androidNetworkType)
  {
    $this->androidNetworkType = $androidNetworkType;
  }

  public function getAndroidNetworkType()
  {
    return $this->androidNetworkType;
  }

  public function setIosNetworkType($iosNetworkType)
  {
    $this->iosNetworkType = $iosNetworkType;
  }

  public function getIosNetworkType()
  {
    return $this->iosNetworkType;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNetworkOperatorCode($networkOperatorCode)
  {
    $this->networkOperatorCode = $networkOperatorCode;
  }

  public function getNetworkOperatorCode()
  {
    return $this->networkOperatorCode;
  }

  public function setNetworkOperatorName($networkOperatorName)
  {
    $this->networkOperatorName = $networkOperatorName;
  }

  public function getNetworkOperatorName()
  {
    return $this->networkOperatorName;
  }

  public function setRegistrationLatencyMillis($registrationLatencyMillis)
  {
    $this->registrationLatencyMillis = $registrationLatencyMillis;
  }

  public function getRegistrationLatencyMillis()
  {
    return $this->registrationLatencyMillis;
  }
}

class Shortify_WP_Google_Service_Games_ParticipantResult extends Shortify_WP_Google_Model
{
  public $kind;
  public $participantId;
  public $placing;
  public $result;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setParticipantId($participantId)
  {
    $this->participantId = $participantId;
  }

  public function getParticipantId()
  {
    return $this->participantId;
  }

  public function setPlacing($placing)
  {
    $this->placing = $placing;
  }

  public function getPlacing()
  {
    return $this->placing;
  }

  public function setResult($result)
  {
    $this->result = $result;
  }

  public function getResult()
  {
    return $this->result;
  }
}

class Shortify_WP_Google_Service_Games_PeerChannelDiagnostics extends Shortify_WP_Google_Model
{
  protected $bytesReceivedType = 'Shortify_WP_Google_Service_Games_AggregateStats';
  protected $bytesReceivedDataType = '';
  protected $bytesSentType = 'Shortify_WP_Google_Service_Games_AggregateStats';
  protected $bytesSentDataType = '';
  public $kind;
  public $numMessagesLost;
  public $numMessagesReceived;
  public $numMessagesSent;
  public $numSendFailures;
  protected $roundtripLatencyMillisType = 'Shortify_WP_Google_Service_Games_AggregateStats';
  protected $roundtripLatencyMillisDataType = '';

  public function setBytesReceived(Shortify_WP_Google_Service_Games_AggregateStats $bytesReceived)
  {
    $this->bytesReceived = $bytesReceived;
  }

  public function getBytesReceived()
  {
    return $this->bytesReceived;
  }

  public function setBytesSent(Shortify_WP_Google_Service_Games_AggregateStats $bytesSent)
  {
    $this->bytesSent = $bytesSent;
  }

  public function getBytesSent()
  {
    return $this->bytesSent;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNumMessagesLost($numMessagesLost)
  {
    $this->numMessagesLost = $numMessagesLost;
  }

  public function getNumMessagesLost()
  {
    return $this->numMessagesLost;
  }

  public function setNumMessagesReceived($numMessagesReceived)
  {
    $this->numMessagesReceived = $numMessagesReceived;
  }

  public function getNumMessagesReceived()
  {
    return $this->numMessagesReceived;
  }

  public function setNumMessagesSent($numMessagesSent)
  {
    $this->numMessagesSent = $numMessagesSent;
  }

  public function getNumMessagesSent()
  {
    return $this->numMessagesSent;
  }

  public function setNumSendFailures($numSendFailures)
  {
    $this->numSendFailures = $numSendFailures;
  }

  public function getNumSendFailures()
  {
    return $this->numSendFailures;
  }

  public function setRoundtripLatencyMillis(Shortify_WP_Google_Service_Games_AggregateStats $roundtripLatencyMillis)
  {
    $this->roundtripLatencyMillis = $roundtripLatencyMillis;
  }

  public function getRoundtripLatencyMillis()
  {
    return $this->roundtripLatencyMillis;
  }
}

class Shortify_WP_Google_Service_Games_PeerSessionDiagnostics extends Shortify_WP_Google_Model
{
  public $connectedTimestampMillis;
  public $kind;
  public $participantId;
  protected $reliableChannelType = 'Shortify_WP_Google_Service_Games_PeerChannelDiagnostics';
  protected $reliableChannelDataType = '';
  protected $unreliableChannelType = 'Shortify_WP_Google_Service_Games_PeerChannelDiagnostics';
  protected $unreliableChannelDataType = '';

  public function setConnectedTimestampMillis($connectedTimestampMillis)
  {
    $this->connectedTimestampMillis = $connectedTimestampMillis;
  }

  public function getConnectedTimestampMillis()
  {
    return $this->connectedTimestampMillis;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setParticipantId($participantId)
  {
    $this->participantId = $participantId;
  }

  public function getParticipantId()
  {
    return $this->participantId;
  }

  public function setReliableChannel(Shortify_WP_Google_Service_Games_PeerChannelDiagnostics $reliableChannel)
  {
    $this->reliableChannel = $reliableChannel;
  }

  public function getReliableChannel()
  {
    return $this->reliableChannel;
  }

  public function setUnreliableChannel(Shortify_WP_Google_Service_Games_PeerChannelDiagnostics $unreliableChannel)
  {
    $this->unreliableChannel = $unreliableChannel;
  }

  public function getUnreliableChannel()
  {
    return $this->unreliableChannel;
  }
}

class Shortify_WP_Google_Service_Games_Played extends Shortify_WP_Google_Model
{
  public $autoMatched;
  public $kind;
  public $timeMillis;

  public function setAutoMatched($autoMatched)
  {
    $this->autoMatched = $autoMatched;
  }

  public function getAutoMatched()
  {
    return $this->autoMatched;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setTimeMillis($timeMillis)
  {
    $this->timeMillis = $timeMillis;
  }

  public function getTimeMillis()
  {
    return $this->timeMillis;
  }
}

class Shortify_WP_Google_Service_Games_Player extends Shortify_WP_Google_Model
{
  public $avatarImageUrl;
  public $displayName;
  protected $experienceInfoType = 'Shortify_WP_Google_Service_Games_PlayerExperienceInfo';
  protected $experienceInfoDataType = '';
  public $kind;
  protected $lastPlayedWithType = 'Shortify_WP_Google_Service_Games_Played';
  protected $lastPlayedWithDataType = '';
  protected $nameType = 'Shortify_WP_Google_Service_Games_PlayerName';
  protected $nameDataType = '';
  public $playerId;
  public $title;

  public function setAvatarImageUrl($avatarImageUrl)
  {
    $this->avatarImageUrl = $avatarImageUrl;
  }

  public function getAvatarImageUrl()
  {
    return $this->avatarImageUrl;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setExperienceInfo(Shortify_WP_Google_Service_Games_PlayerExperienceInfo $experienceInfo)
  {
    $this->experienceInfo = $experienceInfo;
  }

  public function getExperienceInfo()
  {
    return $this->experienceInfo;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLastPlayedWith(Shortify_WP_Google_Service_Games_Played $lastPlayedWith)
  {
    $this->lastPlayedWith = $lastPlayedWith;
  }

  public function getLastPlayedWith()
  {
    return $this->lastPlayedWith;
  }

  public function setName(Shortify_WP_Google_Service_Games_PlayerName $name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setPlayerId($playerId)
  {
    $this->playerId = $playerId;
  }

  public function getPlayerId()
  {
    return $this->playerId;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }
}

class Shortify_WP_Google_Service_Games_PlayerAchievement extends Shortify_WP_Google_Model
{
  public $achievementState;
  public $currentSteps;
  public $experiencePoints;
  public $formattedCurrentStepsString;
  public $id;
  public $kind;
  public $lastUpdatedTimestamp;

  public function setAchievementState($achievementState)
  {
    $this->achievementState = $achievementState;
  }

  public function getAchievementState()
  {
    return $this->achievementState;
  }

  public function setCurrentSteps($currentSteps)
  {
    $this->currentSteps = $currentSteps;
  }

  public function getCurrentSteps()
  {
    return $this->currentSteps;
  }

  public function setExperiencePoints($experiencePoints)
  {
    $this->experiencePoints = $experiencePoints;
  }

  public function getExperiencePoints()
  {
    return $this->experiencePoints;
  }

  public function setFormattedCurrentStepsString($formattedCurrentStepsString)
  {
    $this->formattedCurrentStepsString = $formattedCurrentStepsString;
  }

  public function getFormattedCurrentStepsString()
  {
    return $this->formattedCurrentStepsString;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLastUpdatedTimestamp($lastUpdatedTimestamp)
  {
    $this->lastUpdatedTimestamp = $lastUpdatedTimestamp;
  }

  public function getLastUpdatedTimestamp()
  {
    return $this->lastUpdatedTimestamp;
  }
}

class Shortify_WP_Google_Service_Games_PlayerAchievementListResponse extends Shortify_WP_Google_Collection
{
  protected $itemsType = 'Shortify_WP_Google_Service_Games_PlayerAchievement';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class Shortify_WP_Google_Service_Games_PlayerEvent extends Shortify_WP_Google_Model
{
  public $definitionId;
  public $formattedNumEvents;
  public $kind;
  public $numEvents;
  public $playerId;

  public function setDefinitionId($definitionId)
  {
    $this->definitionId = $definitionId;
  }

  public function getDefinitionId()
  {
    return $this->definitionId;
  }

  public function setFormattedNumEvents($formattedNumEvents)
  {
    $this->formattedNumEvents = $formattedNumEvents;
  }

  public function getFormattedNumEvents()
  {
    return $this->formattedNumEvents;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNumEvents($numEvents)
  {
    $this->numEvents = $numEvents;
  }

  public function getNumEvents()
  {
    return $this->numEvents;
  }

  public function setPlayerId($playerId)
  {
    $this->playerId = $playerId;
  }

  public function getPlayerId()
  {
    return $this->playerId;
  }
}

class Shortify_WP_Google_Service_Games_PlayerEventListResponse extends Shortify_WP_Google_Collection
{
  protected $itemsType = 'Shortify_WP_Google_Service_Games_PlayerEvent';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class Shortify_WP_Google_Service_Games_PlayerExperienceInfo extends Shortify_WP_Google_Model
{
  public $currentExperiencePoints;
  protected $currentLevelType = 'Shortify_WP_Google_Service_Games_PlayerLevel';
  protected $currentLevelDataType = '';
  public $kind;
  public $lastLevelUpTimestampMillis;
  protected $nextLevelType = 'Shortify_WP_Google_Service_Games_PlayerLevel';
  protected $nextLevelDataType = '';

  public function setCurrentExperiencePoints($currentExperiencePoints)
  {
    $this->currentExperiencePoints = $currentExperiencePoints;
  }

  public function getCurrentExperiencePoints()
  {
    return $this->currentExperiencePoints;
  }

  public function setCurrentLevel(Shortify_WP_Google_Service_Games_PlayerLevel $currentLevel)
  {
    $this->currentLevel = $currentLevel;
  }

  public function getCurrentLevel()
  {
    return $this->currentLevel;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLastLevelUpTimestampMillis($lastLevelUpTimestampMillis)
  {
    $this->lastLevelUpTimestampMillis = $lastLevelUpTimestampMillis;
  }

  public function getLastLevelUpTimestampMillis()
  {
    return $this->lastLevelUpTimestampMillis;
  }

  public function setNextLevel(Shortify_WP_Google_Service_Games_PlayerLevel $nextLevel)
  {
    $this->nextLevel = $nextLevel;
  }

  public function getNextLevel()
  {
    return $this->nextLevel;
  }
}

class Shortify_WP_Google_Service_Games_PlayerLeaderboardScore extends Shortify_WP_Google_Model
{
  public $kind;
  public $leaderboardId;
  protected $publicRankType = 'Shortify_WP_Google_Service_Games_LeaderboardScoreRank';
  protected $publicRankDataType = '';
  public $scoreString;
  public $scoreTag;
  public $scoreValue;
  protected $socialRankType = 'Shortify_WP_Google_Service_Games_LeaderboardScoreRank';
  protected $socialRankDataType = '';
  public $timeSpan;
  public $writeTimestamp;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLeaderboardId($leaderboardId)
  {
    $this->leaderboardId = $leaderboardId;
  }

  public function getLeaderboardId()
  {
    return $this->leaderboardId;
  }

  public function setPublicRank(Shortify_WP_Google_Service_Games_LeaderboardScoreRank $publicRank)
  {
    $this->publicRank = $publicRank;
  }

  public function getPublicRank()
  {
    return $this->publicRank;
  }

  public function setScoreString($scoreString)
  {
    $this->scoreString = $scoreString;
  }

  public function getScoreString()
  {
    return $this->scoreString;
  }

  public function setScoreTag($scoreTag)
  {
    $this->scoreTag = $scoreTag;
  }

  public function getScoreTag()
  {
    return $this->scoreTag;
  }

  public function setScoreValue($scoreValue)
  {
    $this->scoreValue = $scoreValue;
  }

  public function getScoreValue()
  {
    return $this->scoreValue;
  }

  public function setSocialRank(Shortify_WP_Google_Service_Games_LeaderboardScoreRank $socialRank)
  {
    $this->socialRank = $socialRank;
  }

  public function getSocialRank()
  {
    return $this->socialRank;
  }

  public function setTimeSpan($timeSpan)
  {
    $this->timeSpan = $timeSpan;
  }

  public function getTimeSpan()
  {
    return $this->timeSpan;
  }

  public function setWriteTimestamp($writeTimestamp)
  {
    $this->writeTimestamp = $writeTimestamp;
  }

  public function getWriteTimestamp()
  {
    return $this->writeTimestamp;
  }
}

class Shortify_WP_Google_Service_Games_PlayerLeaderboardScoreListResponse extends Shortify_WP_Google_Collection
{
  protected $itemsType = 'Shortify_WP_Google_Service_Games_PlayerLeaderboardScore';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;
  protected $playerType = 'Shortify_WP_Google_Service_Games_Player';
  protected $playerDataType = '';

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setPlayer(Shortify_WP_Google_Service_Games_Player $player)
  {
    $this->player = $player;
  }

  public function getPlayer()
  {
    return $this->player;
  }
}

class Shortify_WP_Google_Service_Games_PlayerLevel extends Shortify_WP_Google_Model
{
  public $kind;
  public $level;
  public $maxExperiencePoints;
  public $minExperiencePoints;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLevel($level)
  {
    $this->level = $level;
  }

  public function getLevel()
  {
    return $this->level;
  }

  public function setMaxExperiencePoints($maxExperiencePoints)
  {
    $this->maxExperiencePoints = $maxExperiencePoints;
  }

  public function getMaxExperiencePoints()
  {
    return $this->maxExperiencePoints;
  }

  public function setMinExperiencePoints($minExperiencePoints)
  {
    $this->minExperiencePoints = $minExperiencePoints;
  }

  public function getMinExperiencePoints()
  {
    return $this->minExperiencePoints;
  }
}

class Shortify_WP_Google_Service_Games_PlayerListResponse extends Shortify_WP_Google_Collection
{
  protected $itemsType = 'Shortify_WP_Google_Service_Games_Player';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class Shortify_WP_Google_Service_Games_PlayerName extends Shortify_WP_Google_Model
{
  public $familyName;
  public $givenName;

  public function setFamilyName($familyName)
  {
    $this->familyName = $familyName;
  }

  public function getFamilyName()
  {
    return $this->familyName;
  }

  public function setGivenName($givenName)
  {
    $this->givenName = $givenName;
  }

  public function getGivenName()
  {
    return $this->givenName;
  }
}

class Shortify_WP_Google_Service_Games_PlayerScore extends Shortify_WP_Google_Model
{
  public $formattedScore;
  public $kind;
  public $score;
  public $scoreTag;
  public $timeSpan;

  public function setFormattedScore($formattedScore)
  {
    $this->formattedScore = $formattedScore;
  }

  public function getFormattedScore()
  {
    return $this->formattedScore;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setScore($score)
  {
    $this->score = $score;
  }

  public function getScore()
  {
    return $this->score;
  }

  public function setScoreTag($scoreTag)
  {
    $this->scoreTag = $scoreTag;
  }

  public function getScoreTag()
  {
    return $this->scoreTag;
  }

  public function setTimeSpan($timeSpan)
  {
    $this->timeSpan = $timeSpan;
  }

  public function getTimeSpan()
  {
    return $this->timeSpan;
  }
}

class Shortify_WP_Google_Service_Games_PlayerScoreListResponse extends Shortify_WP_Google_Collection
{
  public $kind;
  protected $submittedScoresType = 'Shortify_WP_Google_Service_Games_PlayerScoreResponse';
  protected $submittedScoresDataType = 'array';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setSubmittedScores($submittedScores)
  {
    $this->submittedScores = $submittedScores;
  }

  public function getSubmittedScores()
  {
    return $this->submittedScores;
  }
}

class Shortify_WP_Google_Service_Games_PlayerScoreResponse extends Shortify_WP_Google_Collection
{
  public $beatenScoreTimeSpans;
  public $formattedScore;
  public $kind;
  public $leaderboardId;
  public $scoreTag;
  protected $unbeatenScoresType = 'Shortify_WP_Google_Service_Games_PlayerScore';
  protected $unbeatenScoresDataType = 'array';

  public function setBeatenScoreTimeSpans($beatenScoreTimeSpans)
  {
    $this->beatenScoreTimeSpans = $beatenScoreTimeSpans;
  }

  public function getBeatenScoreTimeSpans()
  {
    return $this->beatenScoreTimeSpans;
  }

  public function setFormattedScore($formattedScore)
  {
    $this->formattedScore = $formattedScore;
  }

  public function getFormattedScore()
  {
    return $this->formattedScore;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLeaderboardId($leaderboardId)
  {
    $this->leaderboardId = $leaderboardId;
  }

  public function getLeaderboardId()
  {
    return $this->leaderboardId;
  }

  public function setScoreTag($scoreTag)
  {
    $this->scoreTag = $scoreTag;
  }

  public function getScoreTag()
  {
    return $this->scoreTag;
  }

  public function setUnbeatenScores($unbeatenScores)
  {
    $this->unbeatenScores = $unbeatenScores;
  }

  public function getUnbeatenScores()
  {
    return $this->unbeatenScores;
  }
}

class Shortify_WP_Google_Service_Games_PlayerScoreSubmissionList extends Shortify_WP_Google_Collection
{
  public $kind;
  protected $scoresType = 'Shortify_WP_Google_Service_Games_ScoreSubmission';
  protected $scoresDataType = 'array';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setScores($scores)
  {
    $this->scores = $scores;
  }

  public function getScores()
  {
    return $this->scores;
  }
}

class Shortify_WP_Google_Service_Games_PushToken extends Shortify_WP_Google_Model
{
  public $clientRevision;
  protected $idType = 'Shortify_WP_Google_Service_Games_PushTokenId';
  protected $idDataType = '';
  public $kind;
  public $language;

  public function setClientRevision($clientRevision)
  {
    $this->clientRevision = $clientRevision;
  }

  public function getClientRevision()
  {
    return $this->clientRevision;
  }

  public function setId(Shortify_WP_Google_Service_Games_PushTokenId $id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLanguage($language)
  {
    $this->language = $language;
  }

  public function getLanguage()
  {
    return $this->language;
  }
}

class Shortify_WP_Google_Service_Games_PushTokenId extends Shortify_WP_Google_Model
{
  protected $iosType = 'Shortify_WP_Google_Service_Games_PushTokenIdIos';
  protected $iosDataType = '';
  public $kind;

  public function setIos(Shortify_WP_Google_Service_Games_PushTokenIdIos $ios)
  {
    $this->ios = $ios;
  }

  public function getIos()
  {
    return $this->ios;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}

class Shortify_WP_Google_Service_Games_PushTokenIdIos extends Shortify_WP_Google_Model
{
  public $apnsDeviceToken;
  public $apnsEnvironment;

  public function setApnsDeviceToken($apnsDeviceToken)
  {
    $this->apnsDeviceToken = $apnsDeviceToken;
  }

  public function getApnsDeviceToken()
  {
    return $this->apnsDeviceToken;
  }

  public function setApnsEnvironment($apnsEnvironment)
  {
    $this->apnsEnvironment = $apnsEnvironment;
  }

  public function getApnsEnvironment()
  {
    return $this->apnsEnvironment;
  }
}

class Shortify_WP_Google_Service_Games_Quest extends Shortify_WP_Google_Collection
{
  public $acceptedTimestampMillis;
  public $applicationId;
  public $bannerUrl;
  public $description;
  public $endTimestampMillis;
  public $iconUrl;
  public $id;
  public $isDefaultBannerUrl;
  public $isDefaultIconUrl;
  public $kind;
  public $lastUpdatedTimestampMillis;
  protected $milestonesType = 'Shortify_WP_Google_Service_Games_QuestMilestone';
  protected $milestonesDataType = 'array';
  public $name;
  public $notifyTimestampMillis;
  public $startTimestampMillis;
  public $state;

  public function setAcceptedTimestampMillis($acceptedTimestampMillis)
  {
    $this->acceptedTimestampMillis = $acceptedTimestampMillis;
  }

  public function getAcceptedTimestampMillis()
  {
    return $this->acceptedTimestampMillis;
  }

  public function setApplicationId($applicationId)
  {
    $this->applicationId = $applicationId;
  }

  public function getApplicationId()
  {
    return $this->applicationId;
  }

  public function setBannerUrl($bannerUrl)
  {
    $this->bannerUrl = $bannerUrl;
  }

  public function getBannerUrl()
  {
    return $this->bannerUrl;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setEndTimestampMillis($endTimestampMillis)
  {
    $this->endTimestampMillis = $endTimestampMillis;
  }

  public function getEndTimestampMillis()
  {
    return $this->endTimestampMillis;
  }

  public function setIconUrl($iconUrl)
  {
    $this->iconUrl = $iconUrl;
  }

  public function getIconUrl()
  {
    return $this->iconUrl;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setIsDefaultBannerUrl($isDefaultBannerUrl)
  {
    $this->isDefaultBannerUrl = $isDefaultBannerUrl;
  }

  public function getIsDefaultBannerUrl()
  {
    return $this->isDefaultBannerUrl;
  }

  public function setIsDefaultIconUrl($isDefaultIconUrl)
  {
    $this->isDefaultIconUrl = $isDefaultIconUrl;
  }

  public function getIsDefaultIconUrl()
  {
    return $this->isDefaultIconUrl;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLastUpdatedTimestampMillis($lastUpdatedTimestampMillis)
  {
    $this->lastUpdatedTimestampMillis = $lastUpdatedTimestampMillis;
  }

  public function getLastUpdatedTimestampMillis()
  {
    return $this->lastUpdatedTimestampMillis;
  }

  public function setMilestones($milestones)
  {
    $this->milestones = $milestones;
  }

  public function getMilestones()
  {
    return $this->milestones;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setNotifyTimestampMillis($notifyTimestampMillis)
  {
    $this->notifyTimestampMillis = $notifyTimestampMillis;
  }

  public function getNotifyTimestampMillis()
  {
    return $this->notifyTimestampMillis;
  }

  public function setStartTimestampMillis($startTimestampMillis)
  {
    $this->startTimestampMillis = $startTimestampMillis;
  }

  public function getStartTimestampMillis()
  {
    return $this->startTimestampMillis;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
  }
}

class Shortify_WP_Google_Service_Games_QuestContribution extends Shortify_WP_Google_Model
{
  public $formattedValue;
  public $kind;
  public $value;

  public function setFormattedValue($formattedValue)
  {
    $this->formattedValue = $formattedValue;
  }

  public function getFormattedValue()
  {
    return $this->formattedValue;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setValue($value)
  {
    $this->value = $value;
  }

  public function getValue()
  {
    return $this->value;
  }
}

class Shortify_WP_Google_Service_Games_QuestCriterion extends Shortify_WP_Google_Model
{
  protected $completionContributionType = 'Shortify_WP_Google_Service_Games_QuestContribution';
  protected $completionContributionDataType = '';
  protected $currentContributionType = 'Shortify_WP_Google_Service_Games_QuestContribution';
  protected $currentContributionDataType = '';
  public $eventId;
  protected $initialPlayerProgressType = 'Shortify_WP_Google_Service_Games_QuestContribution';
  protected $initialPlayerProgressDataType = '';
  public $kind;

  public function setCompletionContribution(Shortify_WP_Google_Service_Games_QuestContribution $completionContribution)
  {
    $this->completionContribution = $completionContribution;
  }

  public function getCompletionContribution()
  {
    return $this->completionContribution;
  }

  public function setCurrentContribution(Shortify_WP_Google_Service_Games_QuestContribution $currentContribution)
  {
    $this->currentContribution = $currentContribution;
  }

  public function getCurrentContribution()
  {
    return $this->currentContribution;
  }

  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }

  public function getEventId()
  {
    return $this->eventId;
  }

  public function setInitialPlayerProgress(Shortify_WP_Google_Service_Games_QuestContribution $initialPlayerProgress)
  {
    $this->initialPlayerProgress = $initialPlayerProgress;
  }

  public function getInitialPlayerProgress()
  {
    return $this->initialPlayerProgress;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}

class Shortify_WP_Google_Service_Games_QuestListResponse extends Shortify_WP_Google_Collection
{
  protected $itemsType = 'Shortify_WP_Google_Service_Games_Quest';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class Shortify_WP_Google_Service_Games_QuestMilestone extends Shortify_WP_Google_Collection
{
  public $completionRewardData;
  protected $criteriaType = 'Shortify_WP_Google_Service_Games_QuestCriterion';
  protected $criteriaDataType = 'array';
  public $id;
  public $kind;
  public $state;

  public function setCompletionRewardData($completionRewardData)
  {
    $this->completionRewardData = $completionRewardData;
  }

  public function getCompletionRewardData()
  {
    return $this->completionRewardData;
  }

  public function setCriteria($criteria)
  {
    $this->criteria = $criteria;
  }

  public function getCriteria()
  {
    return $this->criteria;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
  }
}

class Shortify_WP_Google_Service_Games_RevisionCheckResponse extends Shortify_WP_Google_Model
{
  public $apiVersion;
  public $kind;
  public $revisionStatus;

  public function setApiVersion($apiVersion)
  {
    $this->apiVersion = $apiVersion;
  }

  public function getApiVersion()
  {
    return $this->apiVersion;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setRevisionStatus($revisionStatus)
  {
    $this->revisionStatus = $revisionStatus;
  }

  public function getRevisionStatus()
  {
    return $this->revisionStatus;
  }
}

class Shortify_WP_Google_Service_Games_Room extends Shortify_WP_Google_Collection
{
  public $applicationId;
  protected $autoMatchingCriteriaType = 'Shortify_WP_Google_Service_Games_RoomAutoMatchingCriteria';
  protected $autoMatchingCriteriaDataType = '';
  protected $autoMatchingStatusType = 'Shortify_WP_Google_Service_Games_RoomAutoMatchStatus';
  protected $autoMatchingStatusDataType = '';
  protected $creationDetailsType = 'Shortify_WP_Google_Service_Games_RoomModification';
  protected $creationDetailsDataType = '';
  public $description;
  public $inviterId;
  public $kind;
  protected $lastUpdateDetailsType = 'Shortify_WP_Google_Service_Games_RoomModification';
  protected $lastUpdateDetailsDataType = '';
  protected $participantsType = 'Shortify_WP_Google_Service_Games_RoomParticipant';
  protected $participantsDataType = 'array';
  public $roomId;
  public $roomStatusVersion;
  public $status;
  public $variant;

  public function setApplicationId($applicationId)
  {
    $this->applicationId = $applicationId;
  }

  public function getApplicationId()
  {
    return $this->applicationId;
  }

  public function setAutoMatchingCriteria(Shortify_WP_Google_Service_Games_RoomAutoMatchingCriteria $autoMatchingCriteria)
  {
    $this->autoMatchingCriteria = $autoMatchingCriteria;
  }

  public function getAutoMatchingCriteria()
  {
    return $this->autoMatchingCriteria;
  }

  public function setAutoMatchingStatus(Shortify_WP_Google_Service_Games_RoomAutoMatchStatus $autoMatchingStatus)
  {
    $this->autoMatchingStatus = $autoMatchingStatus;
  }

  public function getAutoMatchingStatus()
  {
    return $this->autoMatchingStatus;
  }

  public function setCreationDetails(Shortify_WP_Google_Service_Games_RoomModification $creationDetails)
  {
    $this->creationDetails = $creationDetails;
  }

  public function getCreationDetails()
  {
    return $this->creationDetails;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setInviterId($inviterId)
  {
    $this->inviterId = $inviterId;
  }

  public function getInviterId()
  {
    return $this->inviterId;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLastUpdateDetails(Shortify_WP_Google_Service_Games_RoomModification $lastUpdateDetails)
  {
    $this->lastUpdateDetails = $lastUpdateDetails;
  }

  public function getLastUpdateDetails()
  {
    return $this->lastUpdateDetails;
  }

  public function setParticipants($participants)
  {
    $this->participants = $participants;
  }

  public function getParticipants()
  {
    return $this->participants;
  }

  public function setRoomId($roomId)
  {
    $this->roomId = $roomId;
  }

  public function getRoomId()
  {
    return $this->roomId;
  }

  public function setRoomStatusVersion($roomStatusVersion)
  {
    $this->roomStatusVersion = $roomStatusVersion;
  }

  public function getRoomStatusVersion()
  {
    return $this->roomStatusVersion;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setVariant($variant)
  {
    $this->variant = $variant;
  }

  public function getVariant()
  {
    return $this->variant;
  }
}

class Shortify_WP_Google_Service_Games_RoomAutoMatchStatus extends Shortify_WP_Google_Model
{
  public $kind;
  public $waitEstimateSeconds;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setWaitEstimateSeconds($waitEstimateSeconds)
  {
    $this->waitEstimateSeconds = $waitEstimateSeconds;
  }

  public function getWaitEstimateSeconds()
  {
    return $this->waitEstimateSeconds;
  }
}

class Shortify_WP_Google_Service_Games_RoomAutoMatchingCriteria extends Shortify_WP_Google_Model
{
  public $exclusiveBitmask;
  public $kind;
  public $maxAutoMatchingPlayers;
  public $minAutoMatchingPlayers;

  public function setExclusiveBitmask($exclusiveBitmask)
  {
    $this->exclusiveBitmask = $exclusiveBitmask;
  }

  public function getExclusiveBitmask()
  {
    return $this->exclusiveBitmask;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMaxAutoMatchingPlayers($maxAutoMatchingPlayers)
  {
    $this->maxAutoMatchingPlayers = $maxAutoMatchingPlayers;
  }

  public function getMaxAutoMatchingPlayers()
  {
    return $this->maxAutoMatchingPlayers;
  }

  public function setMinAutoMatchingPlayers($minAutoMatchingPlayers)
  {
    $this->minAutoMatchingPlayers = $minAutoMatchingPlayers;
  }

  public function getMinAutoMatchingPlayers()
  {
    return $this->minAutoMatchingPlayers;
  }
}

class Shortify_WP_Google_Service_Games_RoomClientAddress extends Shortify_WP_Google_Model
{
  public $kind;
  public $xmppAddress;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setXmppAddress($xmppAddress)
  {
    $this->xmppAddress = $xmppAddress;
  }

  public function getXmppAddress()
  {
    return $this->xmppAddress;
  }
}

class Shortify_WP_Google_Service_Games_RoomCreateRequest extends Shortify_WP_Google_Collection
{
  protected $autoMatchingCriteriaType = 'Shortify_WP_Google_Service_Games_RoomAutoMatchingCriteria';
  protected $autoMatchingCriteriaDataType = '';
  public $capabilities;
  protected $clientAddressType = 'Shortify_WP_Google_Service_Games_RoomClientAddress';
  protected $clientAddressDataType = '';
  public $invitedPlayerIds;
  public $kind;
  protected $networkDiagnosticsType = 'Shortify_WP_Google_Service_Games_NetworkDiagnostics';
  protected $networkDiagnosticsDataType = '';
  public $requestId;
  public $variant;

  public function setAutoMatchingCriteria(Shortify_WP_Google_Service_Games_RoomAutoMatchingCriteria $autoMatchingCriteria)
  {
    $this->autoMatchingCriteria = $autoMatchingCriteria;
  }

  public function getAutoMatchingCriteria()
  {
    return $this->autoMatchingCriteria;
  }

  public function setCapabilities($capabilities)
  {
    $this->capabilities = $capabilities;
  }

  public function getCapabilities()
  {
    return $this->capabilities;
  }

  public function setClientAddress(Shortify_WP_Google_Service_Games_RoomClientAddress $clientAddress)
  {
    $this->clientAddress = $clientAddress;
  }

  public function getClientAddress()
  {
    return $this->clientAddress;
  }

  public function setInvitedPlayerIds($invitedPlayerIds)
  {
    $this->invitedPlayerIds = $invitedPlayerIds;
  }

  public function getInvitedPlayerIds()
  {
    return $this->invitedPlayerIds;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNetworkDiagnostics(Shortify_WP_Google_Service_Games_NetworkDiagnostics $networkDiagnostics)
  {
    $this->networkDiagnostics = $networkDiagnostics;
  }

  public function getNetworkDiagnostics()
  {
    return $this->networkDiagnostics;
  }

  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }

  public function getRequestId()
  {
    return $this->requestId;
  }

  public function setVariant($variant)
  {
    $this->variant = $variant;
  }

  public function getVariant()
  {
    return $this->variant;
  }
}

class Shortify_WP_Google_Service_Games_RoomJoinRequest extends Shortify_WP_Google_Collection
{
  public $capabilities;
  protected $clientAddressType = 'Shortify_WP_Google_Service_Games_RoomClientAddress';
  protected $clientAddressDataType = '';
  public $kind;
  protected $networkDiagnosticsType = 'Shortify_WP_Google_Service_Games_NetworkDiagnostics';
  protected $networkDiagnosticsDataType = '';

  public function setCapabilities($capabilities)
  {
    $this->capabilities = $capabilities;
  }

  public function getCapabilities()
  {
    return $this->capabilities;
  }

  public function setClientAddress(Shortify_WP_Google_Service_Games_RoomClientAddress $clientAddress)
  {
    $this->clientAddress = $clientAddress;
  }

  public function getClientAddress()
  {
    return $this->clientAddress;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNetworkDiagnostics(Shortify_WP_Google_Service_Games_NetworkDiagnostics $networkDiagnostics)
  {
    $this->networkDiagnostics = $networkDiagnostics;
  }

  public function getNetworkDiagnostics()
  {
    return $this->networkDiagnostics;
  }
}

class Shortify_WP_Google_Service_Games_RoomLeaveDiagnostics extends Shortify_WP_Google_Collection
{
  public $androidNetworkSubtype;
  public $androidNetworkType;
  public $iosNetworkType;
  public $kind;
  public $networkOperatorCode;
  public $networkOperatorName;
  protected $peerSessionType = 'Shortify_WP_Google_Service_Games_PeerSessionDiagnostics';
  protected $peerSessionDataType = 'array';
  public $socketsUsed;

  public function setAndroidNetworkSubtype($androidNetworkSubtype)
  {
    $this->androidNetworkSubtype = $androidNetworkSubtype;
  }

  public function getAndroidNetworkSubtype()
  {
    return $this->androidNetworkSubtype;
  }

  public function setAndroidNetworkType($androidNetworkType)
  {
    $this->androidNetworkType = $androidNetworkType;
  }

  public function getAndroidNetworkType()
  {
    return $this->androidNetworkType;
  }

  public function setIosNetworkType($iosNetworkType)
  {
    $this->iosNetworkType = $iosNetworkType;
  }

  public function getIosNetworkType()
  {
    return $this->iosNetworkType;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNetworkOperatorCode($networkOperatorCode)
  {
    $this->networkOperatorCode = $networkOperatorCode;
  }

  public function getNetworkOperatorCode()
  {
    return $this->networkOperatorCode;
  }

  public function setNetworkOperatorName($networkOperatorName)
  {
    $this->networkOperatorName = $networkOperatorName;
  }

  public function getNetworkOperatorName()
  {
    return $this->networkOperatorName;
  }

  public function setPeerSession($peerSession)
  {
    $this->peerSession = $peerSession;
  }

  public function getPeerSession()
  {
    return $this->peerSession;
  }

  public function setSocketsUsed($socketsUsed)
  {
    $this->socketsUsed = $socketsUsed;
  }

  public function getSocketsUsed()
  {
    return $this->socketsUsed;
  }
}

class Shortify_WP_Google_Service_Games_RoomLeaveRequest extends Shortify_WP_Google_Model
{
  public $kind;
  protected $leaveDiagnosticsType = 'Shortify_WP_Google_Service_Games_RoomLeaveDiagnostics';
  protected $leaveDiagnosticsDataType = '';
  public $reason;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLeaveDiagnostics(Shortify_WP_Google_Service_Games_RoomLeaveDiagnostics $leaveDiagnostics)
  {
    $this->leaveDiagnostics = $leaveDiagnostics;
  }

  public function getLeaveDiagnostics()
  {
    return $this->leaveDiagnostics;
  }

  public function setReason($reason)
  {
    $this->reason = $reason;
  }

  public function getReason()
  {
    return $this->reason;
  }
}

class Shortify_WP_Google_Service_Games_RoomList extends Shortify_WP_Google_Collection
{
  protected $itemsType = 'Shortify_WP_Google_Service_Games_Room';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class Shortify_WP_Google_Service_Games_RoomModification extends Shortify_WP_Google_Model
{
  public $kind;
  public $modifiedTimestampMillis;
  public $participantId;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setModifiedTimestampMillis($modifiedTimestampMillis)
  {
    $this->modifiedTimestampMillis = $modifiedTimestampMillis;
  }

  public function getModifiedTimestampMillis()
  {
    return $this->modifiedTimestampMillis;
  }

  public function setParticipantId($participantId)
  {
    $this->participantId = $participantId;
  }

  public function getParticipantId()
  {
    return $this->participantId;
  }
}

class Shortify_WP_Google_Service_Games_RoomP2PStatus extends Shortify_WP_Google_Model
{
  public $connectionSetupLatencyMillis;
  public $error;
  public $errorReason;
  public $kind;
  public $participantId;
  public $status;
  public $unreliableRoundtripLatencyMillis;

  public function setConnectionSetupLatencyMillis($connectionSetupLatencyMillis)
  {
    $this->connectionSetupLatencyMillis = $connectionSetupLatencyMillis;
  }

  public function getConnectionSetupLatencyMillis()
  {
    return $this->connectionSetupLatencyMillis;
  }

  public function setError($error)
  {
    $this->error = $error;
  }

  public function getError()
  {
    return $this->error;
  }

  public function setErrorReason($errorReason)
  {
    $this->errorReason = $errorReason;
  }

  public function getErrorReason()
  {
    return $this->errorReason;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setParticipantId($participantId)
  {
    $this->participantId = $participantId;
  }

  public function getParticipantId()
  {
    return $this->participantId;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setUnreliableRoundtripLatencyMillis($unreliableRoundtripLatencyMillis)
  {
    $this->unreliableRoundtripLatencyMillis = $unreliableRoundtripLatencyMillis;
  }

  public function getUnreliableRoundtripLatencyMillis()
  {
    return $this->unreliableRoundtripLatencyMillis;
  }
}

class Shortify_WP_Google_Service_Games_RoomP2PStatuses extends Shortify_WP_Google_Collection
{
  public $kind;
  protected $updatesType = 'Shortify_WP_Google_Service_Games_RoomP2PStatus';
  protected $updatesDataType = 'array';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setUpdates($updates)
  {
    $this->updates = $updates;
  }

  public function getUpdates()
  {
    return $this->updates;
  }
}

class Shortify_WP_Google_Service_Games_RoomParticipant extends Shortify_WP_Google_Collection
{
  public $autoMatched;
  protected $autoMatchedPlayerType = 'Shortify_WP_Google_Service_Games_AnonymousPlayer';
  protected $autoMatchedPlayerDataType = '';
  public $capabilities;
  protected $clientAddressType = 'Shortify_WP_Google_Service_Games_RoomClientAddress';
  protected $clientAddressDataType = '';
  public $connected;
  public $id;
  public $kind;
  public $leaveReason;
  protected $playerType = 'Shortify_WP_Google_Service_Games_Player';
  protected $playerDataType = '';
  public $status;

  public function setAutoMatched($autoMatched)
  {
    $this->autoMatched = $autoMatched;
  }

  public function getAutoMatched()
  {
    return $this->autoMatched;
  }

  public function setAutoMatchedPlayer(Shortify_WP_Google_Service_Games_AnonymousPlayer $autoMatchedPlayer)
  {
    $this->autoMatchedPlayer = $autoMatchedPlayer;
  }

  public function getAutoMatchedPlayer()
  {
    return $this->autoMatchedPlayer;
  }

  public function setCapabilities($capabilities)
  {
    $this->capabilities = $capabilities;
  }

  public function getCapabilities()
  {
    return $this->capabilities;
  }

  public function setClientAddress(Shortify_WP_Google_Service_Games_RoomClientAddress $clientAddress)
  {
    $this->clientAddress = $clientAddress;
  }

  public function getClientAddress()
  {
    return $this->clientAddress;
  }

  public function setConnected($connected)
  {
    $this->connected = $connected;
  }

  public function getConnected()
  {
    return $this->connected;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLeaveReason($leaveReason)
  {
    $this->leaveReason = $leaveReason;
  }

  public function getLeaveReason()
  {
    return $this->leaveReason;
  }

  public function setPlayer(Shortify_WP_Google_Service_Games_Player $player)
  {
    $this->player = $player;
  }

  public function getPlayer()
  {
    return $this->player;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
}

class Shortify_WP_Google_Service_Games_RoomStatus extends Shortify_WP_Google_Collection
{
  protected $autoMatchingStatusType = 'Shortify_WP_Google_Service_Games_RoomAutoMatchStatus';
  protected $autoMatchingStatusDataType = '';
  public $kind;
  protected $participantsType = 'Shortify_WP_Google_Service_Games_RoomParticipant';
  protected $participantsDataType = 'array';
  public $roomId;
  public $status;
  public $statusVersion;

  public function setAutoMatchingStatus(Shortify_WP_Google_Service_Games_RoomAutoMatchStatus $autoMatchingStatus)
  {
    $this->autoMatchingStatus = $autoMatchingStatus;
  }

  public function getAutoMatchingStatus()
  {
    return $this->autoMatchingStatus;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setParticipants($participants)
  {
    $this->participants = $participants;
  }

  public function getParticipants()
  {
    return $this->participants;
  }

  public function setRoomId($roomId)
  {
    $this->roomId = $roomId;
  }

  public function getRoomId()
  {
    return $this->roomId;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatusVersion($statusVersion)
  {
    $this->statusVersion = $statusVersion;
  }

  public function getStatusVersion()
  {
    return $this->statusVersion;
  }
}

class Shortify_WP_Google_Service_Games_ScoreSubmission extends Shortify_WP_Google_Model
{
  public $kind;
  public $leaderboardId;
  public $score;
  public $scoreTag;
  public $signature;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLeaderboardId($leaderboardId)
  {
    $this->leaderboardId = $leaderboardId;
  }

  public function getLeaderboardId()
  {
    return $this->leaderboardId;
  }

  public function setScore($score)
  {
    $this->score = $score;
  }

  public function getScore()
  {
    return $this->score;
  }

  public function setScoreTag($scoreTag)
  {
    $this->scoreTag = $scoreTag;
  }

  public function getScoreTag()
  {
    return $this->scoreTag;
  }

  public function setSignature($signature)
  {
    $this->signature = $signature;
  }

  public function getSignature()
  {
    return $this->signature;
  }
}

class Shortify_WP_Google_Service_Games_Snapshot extends Shortify_WP_Google_Model
{
  protected $coverImageType = 'Shortify_WP_Google_Service_Games_SnapshotImage';
  protected $coverImageDataType = '';
  public $description;
  public $driveId;
  public $durationMillis;
  public $id;
  public $kind;
  public $lastModifiedMillis;
  public $title;
  public $type;
  public $uniqueName;

  public function setCoverImage(Shortify_WP_Google_Service_Games_SnapshotImage $coverImage)
  {
    $this->coverImage = $coverImage;
  }

  public function getCoverImage()
  {
    return $this->coverImage;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDriveId($driveId)
  {
    $this->driveId = $driveId;
  }

  public function getDriveId()
  {
    return $this->driveId;
  }

  public function setDurationMillis($durationMillis)
  {
    $this->durationMillis = $durationMillis;
  }

  public function getDurationMillis()
  {
    return $this->durationMillis;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLastModifiedMillis($lastModifiedMillis)
  {
    $this->lastModifiedMillis = $lastModifiedMillis;
  }

  public function getLastModifiedMillis()
  {
    return $this->lastModifiedMillis;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setUniqueName($uniqueName)
  {
    $this->uniqueName = $uniqueName;
  }

  public function getUniqueName()
  {
    return $this->uniqueName;
  }
}

class Shortify_WP_Google_Service_Games_SnapshotImage extends Shortify_WP_Google_Model
{
  public $height;
  public $kind;
  public $mimeType;
  public $url;
  public $width;

  public function setHeight($height)
  {
    $this->height = $height;
  }

  public function getHeight()
  {
    return $this->height;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }

  public function getMimeType()
  {
    return $this->mimeType;
  }

  public function setUrl($url)
  {
    $this->url = $url;
  }

  public function getUrl()
  {
    return $this->url;
  }

  public function setWidth($width)
  {
    $this->width = $width;
  }

  public function getWidth()
  {
    return $this->width;
  }
}

class Shortify_WP_Google_Service_Games_SnapshotListResponse extends Shortify_WP_Google_Collection
{
  protected $itemsType = 'Shortify_WP_Google_Service_Games_Snapshot';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class Shortify_WP_Google_Service_Games_TurnBasedAutoMatchingCriteria extends Shortify_WP_Google_Model
{
  public $exclusiveBitmask;
  public $kind;
  public $maxAutoMatchingPlayers;
  public $minAutoMatchingPlayers;

  public function setExclusiveBitmask($exclusiveBitmask)
  {
    $this->exclusiveBitmask = $exclusiveBitmask;
  }

  public function getExclusiveBitmask()
  {
    return $this->exclusiveBitmask;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMaxAutoMatchingPlayers($maxAutoMatchingPlayers)
  {
    $this->maxAutoMatchingPlayers = $maxAutoMatchingPlayers;
  }

  public function getMaxAutoMatchingPlayers()
  {
    return $this->maxAutoMatchingPlayers;
  }

  public function setMinAutoMatchingPlayers($minAutoMatchingPlayers)
  {
    $this->minAutoMatchingPlayers = $minAutoMatchingPlayers;
  }

  public function getMinAutoMatchingPlayers()
  {
    return $this->minAutoMatchingPlayers;
  }
}

class Shortify_WP_Google_Service_Games_TurnBasedMatch extends Shortify_WP_Google_Collection
{
  public $applicationId;
  protected $autoMatchingCriteriaType = 'Shortify_WP_Google_Service_Games_TurnBasedAutoMatchingCriteria';
  protected $autoMatchingCriteriaDataType = '';
  protected $creationDetailsType = 'Shortify_WP_Google_Service_Games_TurnBasedMatchModification';
  protected $creationDetailsDataType = '';
  protected $dataType = 'Shortify_WP_Google_Service_Games_TurnBasedMatchData';
  protected $dataDataType = '';
  public $description;
  public $inviterId;
  public $kind;
  protected $lastUpdateDetailsType = 'Shortify_WP_Google_Service_Games_TurnBasedMatchModification';
  protected $lastUpdateDetailsDataType = '';
  public $matchId;
  public $matchNumber;
  public $matchVersion;
  protected $participantsType = 'Shortify_WP_Google_Service_Games_TurnBasedMatchParticipant';
  protected $participantsDataType = 'array';
  public $pendingParticipantId;
  protected $previousMatchDataType = 'Shortify_WP_Google_Service_Games_TurnBasedMatchData';
  protected $previousMatchDataDataType = '';
  public $rematchId;
  protected $resultsType = 'Shortify_WP_Google_Service_Games_ParticipantResult';
  protected $resultsDataType = 'array';
  public $status;
  public $userMatchStatus;
  public $variant;
  public $withParticipantId;

  public function setApplicationId($applicationId)
  {
    $this->applicationId = $applicationId;
  }

  public function getApplicationId()
  {
    return $this->applicationId;
  }

  public function setAutoMatchingCriteria(Shortify_WP_Google_Service_Games_TurnBasedAutoMatchingCriteria $autoMatchingCriteria)
  {
    $this->autoMatchingCriteria = $autoMatchingCriteria;
  }

  public function getAutoMatchingCriteria()
  {
    return $this->autoMatchingCriteria;
  }

  public function setCreationDetails(Shortify_WP_Google_Service_Games_TurnBasedMatchModification $creationDetails)
  {
    $this->creationDetails = $creationDetails;
  }

  public function getCreationDetails()
  {
    return $this->creationDetails;
  }

  public function setData(Shortify_WP_Google_Service_Games_TurnBasedMatchData $data)
  {
    $this->data = $data;
  }

  public function getData()
  {
    return $this->data;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setInviterId($inviterId)
  {
    $this->inviterId = $inviterId;
  }

  public function getInviterId()
  {
    return $this->inviterId;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLastUpdateDetails(Shortify_WP_Google_Service_Games_TurnBasedMatchModification $lastUpdateDetails)
  {
    $this->lastUpdateDetails = $lastUpdateDetails;
  }

  public function getLastUpdateDetails()
  {
    return $this->lastUpdateDetails;
  }

  public function setMatchId($matchId)
  {
    $this->matchId = $matchId;
  }

  public function getMatchId()
  {
    return $this->matchId;
  }

  public function setMatchNumber($matchNumber)
  {
    $this->matchNumber = $matchNumber;
  }

  public function getMatchNumber()
  {
    return $this->matchNumber;
  }

  public function setMatchVersion($matchVersion)
  {
    $this->matchVersion = $matchVersion;
  }

  public function getMatchVersion()
  {
    return $this->matchVersion;
  }

  public function setParticipants($participants)
  {
    $this->participants = $participants;
  }

  public function getParticipants()
  {
    return $this->participants;
  }

  public function setPendingParticipantId($pendingParticipantId)
  {
    $this->pendingParticipantId = $pendingParticipantId;
  }

  public function getPendingParticipantId()
  {
    return $this->pendingParticipantId;
  }

  public function setPreviousMatchData(Shortify_WP_Google_Service_Games_TurnBasedMatchData $previousMatchData)
  {
    $this->previousMatchData = $previousMatchData;
  }

  public function getPreviousMatchData()
  {
    return $this->previousMatchData;
  }

  public function setRematchId($rematchId)
  {
    $this->rematchId = $rematchId;
  }

  public function getRematchId()
  {
    return $this->rematchId;
  }

  public function setResults($results)
  {
    $this->results = $results;
  }

  public function getResults()
  {
    return $this->results;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setUserMatchStatus($userMatchStatus)
  {
    $this->userMatchStatus = $userMatchStatus;
  }

  public function getUserMatchStatus()
  {
    return $this->userMatchStatus;
  }

  public function setVariant($variant)
  {
    $this->variant = $variant;
  }

  public function getVariant()
  {
    return $this->variant;
  }

  public function setWithParticipantId($withParticipantId)
  {
    $this->withParticipantId = $withParticipantId;
  }

  public function getWithParticipantId()
  {
    return $this->withParticipantId;
  }
}

class Shortify_WP_Google_Service_Games_TurnBasedMatchCreateRequest extends Shortify_WP_Google_Collection
{
  protected $autoMatchingCriteriaType = 'Shortify_WP_Google_Service_Games_TurnBasedAutoMatchingCriteria';
  protected $autoMatchingCriteriaDataType = '';
  public $invitedPlayerIds;
  public $kind;
  public $requestId;
  public $variant;

  public function setAutoMatchingCriteria(Shortify_WP_Google_Service_Games_TurnBasedAutoMatchingCriteria $autoMatchingCriteria)
  {
    $this->autoMatchingCriteria = $autoMatchingCriteria;
  }

  public function getAutoMatchingCriteria()
  {
    return $this->autoMatchingCriteria;
  }

  public function setInvitedPlayerIds($invitedPlayerIds)
  {
    $this->invitedPlayerIds = $invitedPlayerIds;
  }

  public function getInvitedPlayerIds()
  {
    return $this->invitedPlayerIds;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }

  public function getRequestId()
  {
    return $this->requestId;
  }

  public function setVariant($variant)
  {
    $this->variant = $variant;
  }

  public function getVariant()
  {
    return $this->variant;
  }
}

class Shortify_WP_Google_Service_Games_TurnBasedMatchData extends Shortify_WP_Google_Model
{
  public $data;
  public $dataAvailable;
  public $kind;

  public function setData($data)
  {
    $this->data = $data;
  }

  public function getData()
  {
    return $this->data;
  }

  public function setDataAvailable($dataAvailable)
  {
    $this->dataAvailable = $dataAvailable;
  }

  public function getDataAvailable()
  {
    return $this->dataAvailable;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}

class Shortify_WP_Google_Service_Games_TurnBasedMatchDataRequest extends Shortify_WP_Google_Model
{
  public $data;
  public $kind;

  public function setData($data)
  {
    $this->data = $data;
  }

  public function getData()
  {
    return $this->data;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}

class Shortify_WP_Google_Service_Games_TurnBasedMatchList extends Shortify_WP_Google_Collection
{
  protected $itemsType = 'Shortify_WP_Google_Service_Games_TurnBasedMatch';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class Shortify_WP_Google_Service_Games_TurnBasedMatchModification extends Shortify_WP_Google_Model
{
  public $kind;
  public $modifiedTimestampMillis;
  public $participantId;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setModifiedTimestampMillis($modifiedTimestampMillis)
  {
    $this->modifiedTimestampMillis = $modifiedTimestampMillis;
  }

  public function getModifiedTimestampMillis()
  {
    return $this->modifiedTimestampMillis;
  }

  public function setParticipantId($participantId)
  {
    $this->participantId = $participantId;
  }

  public function getParticipantId()
  {
    return $this->participantId;
  }
}

class Shortify_WP_Google_Service_Games_TurnBasedMatchParticipant extends Shortify_WP_Google_Model
{
  public $autoMatched;
  protected $autoMatchedPlayerType = 'Shortify_WP_Google_Service_Games_AnonymousPlayer';
  protected $autoMatchedPlayerDataType = '';
  public $id;
  public $kind;
  protected $playerType = 'Shortify_WP_Google_Service_Games_Player';
  protected $playerDataType = '';
  public $status;

  public function setAutoMatched($autoMatched)
  {
    $this->autoMatched = $autoMatched;
  }

  public function getAutoMatched()
  {
    return $this->autoMatched;
  }

  public function setAutoMatchedPlayer(Shortify_WP_Google_Service_Games_AnonymousPlayer $autoMatchedPlayer)
  {
    $this->autoMatchedPlayer = $autoMatchedPlayer;
  }

  public function getAutoMatchedPlayer()
  {
    return $this->autoMatchedPlayer;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPlayer(Shortify_WP_Google_Service_Games_Player $player)
  {
    $this->player = $player;
  }

  public function getPlayer()
  {
    return $this->player;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
}

class Shortify_WP_Google_Service_Games_TurnBasedMatchRematch extends Shortify_WP_Google_Model
{
  public $kind;
  protected $previousMatchType = 'Shortify_WP_Google_Service_Games_TurnBasedMatch';
  protected $previousMatchDataType = '';
  protected $rematchType = 'Shortify_WP_Google_Service_Games_TurnBasedMatch';
  protected $rematchDataType = '';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPreviousMatch(Shortify_WP_Google_Service_Games_TurnBasedMatch $previousMatch)
  {
    $this->previousMatch = $previousMatch;
  }

  public function getPreviousMatch()
  {
    return $this->previousMatch;
  }

  public function setRematch(Shortify_WP_Google_Service_Games_TurnBasedMatch $rematch)
  {
    $this->rematch = $rematch;
  }

  public function getRematch()
  {
    return $this->rematch;
  }
}

class Shortify_WP_Google_Service_Games_TurnBasedMatchResults extends Shortify_WP_Google_Collection
{
  protected $dataType = 'Shortify_WP_Google_Service_Games_TurnBasedMatchDataRequest';
  protected $dataDataType = '';
  public $kind;
  public $matchVersion;
  protected $resultsType = 'Shortify_WP_Google_Service_Games_ParticipantResult';
  protected $resultsDataType = 'array';

  public function setData(Shortify_WP_Google_Service_Games_TurnBasedMatchDataRequest $data)
  {
    $this->data = $data;
  }

  public function getData()
  {
    return $this->data;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMatchVersion($matchVersion)
  {
    $this->matchVersion = $matchVersion;
  }

  public function getMatchVersion()
  {
    return $this->matchVersion;
  }

  public function setResults($results)
  {
    $this->results = $results;
  }

  public function getResults()
  {
    return $this->results;
  }
}

class Shortify_WP_Google_Service_Games_TurnBasedMatchSync extends Shortify_WP_Google_Collection
{
  protected $itemsType = 'Shortify_WP_Google_Service_Games_TurnBasedMatch';
  protected $itemsDataType = 'array';
  public $kind;
  public $moreAvailable;
  public $nextPageToken;

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMoreAvailable($moreAvailable)
  {
    $this->moreAvailable = $moreAvailable;
  }

  public function getMoreAvailable()
  {
    return $this->moreAvailable;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class Shortify_WP_Google_Service_Games_TurnBasedMatchTurn extends Shortify_WP_Google_Collection
{
  protected $dataType = 'Shortify_WP_Google_Service_Games_TurnBasedMatchDataRequest';
  protected $dataDataType = '';
  public $kind;
  public $matchVersion;
  public $pendingParticipantId;
  protected $resultsType = 'Shortify_WP_Google_Service_Games_ParticipantResult';
  protected $resultsDataType = 'array';

  public function setData(Shortify_WP_Google_Service_Games_TurnBasedMatchDataRequest $data)
  {
    $this->data = $data;
  }

  public function getData()
  {
    return $this->data;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMatchVersion($matchVersion)
  {
    $this->matchVersion = $matchVersion;
  }

  public function getMatchVersion()
  {
    return $this->matchVersion;
  }

  public function setPendingParticipantId($pendingParticipantId)
  {
    $this->pendingParticipantId = $pendingParticipantId;
  }

  public function getPendingParticipantId()
  {
    return $this->pendingParticipantId;
  }

  public function setResults($results)
  {
    $this->results = $results;
  }

  public function getResults()
  {
    return $this->results;
  }
}