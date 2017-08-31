# === T3v Stage Configuration ===

plugin {
  tx_t3vstage {
    persistence {
      enableAutomaticCacheClearing = 1

      updateReferenceIndex = 1

      # storagePid = {$plugin.tx_t3vstage.persistence.storagePid}
    }

    view {
      layoutRootPath = {$plugin.tx_t3vstage.view.layoutRootPath}

      templateRootPath = {$plugin.tx_t3vstage.view.templateRootPath}

      partialRootPath = {$plugin.tx_t3vstage.view.partialRootPath}
    }

    settings {
      # ...
    }
  }
}