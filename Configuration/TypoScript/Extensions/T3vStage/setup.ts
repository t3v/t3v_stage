# === T3v Stage Configuration ===

plugin {
  tx_t3vstage {
    persistence {
      enableAutomaticCacheClearing = 1

      updateReferenceIndex = 1

      # storagePid = {$plugin.tx_t3vstage.persistence.storagePid}

      classes {
        T3v\T3vStage\Domain\Model\Slide {
          mapping {
            tableName = tx_t3vstage_domain_model_slide

            # columns {
            #   foo.mapOnProperty = foo
            #   bar.mapOnProperty = bar
            # }
          }
        }
      }
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