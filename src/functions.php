<?php

namespace Heyday;

/**
 * Clears the class loader manifest
 * @return void
 */
function clear_class_manifest() {
    new \SS_ClassManifest(BASE_PATH, false, true);
}


/**
 * Clears the cached statics manifest
 * @return void
 */
function clear_config_static_manifest() {
    new \SS_ConfigStaticManifest(BASE_PATH, false, true);
}


/**
 * Clears the config yml manifest
 * @return void
 */
function clear_config_manifest() {
    new \SS_ConfigManifest(BASE_PATH, false, true);
}


/**
 * Clears the template manifest
 * @param string $project
 * @return void
 */
function clear_template_manifest($project = 'mysite') {
    new \SS_TemplateManifest(BASE_PATH, $project, false, true);
}