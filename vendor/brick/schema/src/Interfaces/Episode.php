<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * http://schema.org/Episode
 *
 * @property-read SchemaTypeList<Person>             $actor             An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
 * @property-read SchemaTypeList<VideoObject>        $trailer           The trailer of a movie or tv/radio series, season, episode, etc.
 * @property-read SchemaTypeList<CreativeWorkSeries> $partOfSeries      The series to which this episode or season belongs.
 * @property-read SchemaTypeList<CreativeWorkSeason> $partOfSeason      The season to which this episode belongs.
 * @property-read SchemaTypeList<MusicGroup|Person>  $musicBy           The composer of the soundtrack.
 * @property-read SchemaTypeList<Person>             $directors         A director of e.g. tv, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
 * @property-read SchemaTypeList<Integer|Text>       $episodeNumber     Position of the episode within an ordered group of episodes.
 * @property-read SchemaTypeList<Person>             $director          A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
 * @property-read SchemaTypeList<Organization>       $productionCompany The production company or studio responsible for the item e.g. series, video game, episode etc.
 * @property-read SchemaTypeList<Person>             $actors            An actor, e.g. in tv, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
 */
interface Episode extends CreativeWork
{
}
