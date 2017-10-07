# === T3v Stage Constants ===

plugin {
  tx_t3vstage {
    persistence {
      # cat=plugin/tx_t3vstage/persistence; type=int+; label=The PID of the storage
      # storagePid = 0
    }

    view {
      # cat=plugin/tx_t3vstage/view; type=string; label=Path to layouts
      layoutRootPath = EXT:t3v_stage/Resources/Private/Layouts/

      # cat=plugin/tx_t3vstage/view; type=string; label=Path to templates
      templateRootPath = EXT:t3v_stage/Resources/Private/Templates/

      # cat=plugin/tx_t3vstage/view; type=string; label=Path to template partials
      partialRootPath = EXT:t3v_stage/Resources/Private/Partials/
    }

    settings {
      # ...
    }
  }
}