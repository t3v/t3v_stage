# ---------------------------
# | T3v Stage Configuration |
# ---------------------------

plugin {
  tx_t3vstage {
    persistence {
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

      enableAutomaticCacheClearing = {$plugin.tx_t3vstage.persistence.enableAutomaticCacheClearing}

      storagePid = {$plugin.tx_t3vstage.persistence.storagePid}

      updateReferenceIndex = {$plugin.tx_t3vstage.persistence.updateReferenceIndex}
    }

    settings {
      # ...
    }

    view {
      layoutRootPaths {
        0 = {$plugin.tx_t3vstage.view.layoutRootPath}
      }

      templateRootPaths {
        0 = {$plugin.tx_t3vstage.view.templateRootPath}
      }

      partialRootPaths {
        0 = {$plugin.tx_t3vstage.view.partialRootPath}
      }
    }
  }
}